<?php

namespace App\Services;

use App\Models\Fppp;
use App\Models\Company;
use App\Models\Approachment;

/**
 * Class SearchService
 * @package App\Services
 */
class SearchService
{
    public function SearchFppp($keywords){
        $result = '';

        if ($keywords) {
            //BELUM BISA CARI BERDASARKAN NOMOR QUOTATION//

            $result = Fppp::where('fppp_type', 'like', '%' . $keywords . '%')
                ->orWhere('production_phase', 'like', '%' . $keywords . '%')
                ->orWhere('fppp_no', 'like', '%' . $keywords . '%')
                ->orWhereRelation('quotation', 'no_quotation', 'like', '%' . $keywords . '%')
                ->orWhere('order_status', 'like', '%' . $keywords . '%')
                ->orWhere('fppp_revisino', 'like', '%' . $keywords . '%')
                ->orWhere('fppp_keterangan', 'like', '%' . $keywords . '%')
                ->orWhere('production_time', 'like', '%' . $keywords . '%')
                ->orWhere('color', 'like', '%' . $keywords . '%')
                ->orWhere('glass', 'like', '%' . $keywords . '%')
                ->orWhere('glass_type', 'like', '%' . $keywords . '%')
                ->orWhere('retrieval_deadline', 'like', '%' . $keywords . '%')
                ->orWhere('box_usage', 'like', '%' . $keywords . '%')
                ->orWhere('sealant_usage', 'like', '%' . $keywords . '%')
                ->orWhere('delivery_to_expedition', 'like', '%' . $keywords . '%')
                ->orWhere('note', 'like', '%' . $keywords . '%')
                ->with("quotation")->orderBy('created_at', 'desc')->orderBy('quotation_id', 'desc')
                ->paginate(10);
        } else {
            $result = Fppp::with("quotation")->orderBy('created_at', 'desc')->orderBy('quotation_id', 'desc')->paginate(20);
        }

        return $result;
    }

    public function SearchContact($keywords)
    {

    }

    public function SearchCompany($keywords)
    {
        $result = "";

        if ($keywords) {
            $result = Company::where('name', 'like', '%' . $keywords . '%')
            ->orWhere('phone_number', 'like', '%' . $keywords . '%')
            ->orWhere('address', 'like', '%' . $keywords . '%')
            ->orWhere('city', 'like', '%' . $keywords . '%')
            ->orWhere('postal_code', 'like', '%' . $keywords . '%')
            ->orWhere('number_of_employees', 'like', '%' . $keywords . '%')
            ->orWhere('annual_revenue', 'like', '%' . $keywords . '%')
            ->orWhere('time_zone', 'like', '%' . $keywords . '%')
            ->orWhere('linkedin_company', 'like', '%' . $keywords . '%')
            ->orWhereRelation('company_type', 'name', 'like', '%' . $keywords . '%')
            ->orWhereRelation('company_area', 'name', 'like', '%' . $keywords . '%')
            ->with("company_type", "company_area")->orderBy('created_at', 'desc')
            ->paginate(10);
        } else {
            $result = Company::with("company_type", "company_area")->orderBy('created_at', 'desc')->paginate(10);
        }

        return $result;
    }

    public function SearchQuotation($keywords)
    {

    }

    public function SearchApproachment($request)
    {
        $result = '';

        if ($request->search) {
            //BELUM BISA CARI BERDASARKAN NAMA STATUS, NAMA CONTACT, NAMA ACTIVITY//

            $result = Approachment::where('date', 'like', '%' . $request->search . '%')
                ->orWhere('note', 'like', '%' . $request->search . '%')
                ->orWhereRelation('status', 'name', 'like', '%' . $request->search . '%')
                ->orWhereRelation('contact', 'name', 'like', '%' . $request->search . '%')
                ->orWhereRelation('activity', 'name', 'like', '%' . $request->search . '%')
                ->with('activity', 'contact', 'status')->orderBy('created_at', 'desc')->orderBy('contact_id', 'desc')->status($request)->paginate(10);
        } else {
            
            $result = Approachment::with('activity', 'contact', 'status')->orderBy('created_at', 'desc')->orderBy('contact_id', 'desc')->status($request)->paginate(10);
        }

        return $result;

        
    }
}
