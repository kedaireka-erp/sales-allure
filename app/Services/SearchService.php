<?php

namespace App\Services;

use App\Models\Fppp;

/**
 * Class SearchService
 * @package App\Services
 */
class SearchService
{
    public function SearchFppp($keywords){
        $result = '';

        if ($keywords) {
            $result = Fppp::where('fppp_type', 'like', '%' . $keywords . '%')
                ->orWhere('production_phase', 'like', '%' . $keywords . '%')
                ->orWhere('fppp_no', 'like', '%' . $keywords . '%')
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

    }

    public function SearchQuotation($keywords)
    {

    }

    public function SearchApproachment($keywords)
    {
        
    }
}
