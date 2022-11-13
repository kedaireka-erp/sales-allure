<?php

namespace App\Http\Controllers;

use App\Models\Quotation;
use App\Models\Approachment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function getApproachmentStatusData()
    {
        $data1 = DB::table('approachments')
            ->select('statuses.name')
            ->join('statuses', 'approachments.status_id', '=', 'statuses.id')
            ->distinct()
            ->pluck('name')->toArray();

        $data2 = Approachment::select(DB::raw('count(*) as total'))
            ->join('statuses', 'statuses.id', '=', 'approachments.status_id')
            ->groupBy('status_id')
            //this month
            ->whereMonth('approachments.date', date('m'))
            ->pluck('total')->toArray();

        return response()->json([
            'labels' => $data1,
            'data' => $data2
        ]);
    }

    public function getQuotationNominalData()
    {
        $this_year = [];
        $last_year = [];

        for ($i = 0; $i < 12; $i++) {
            $month_this = Quotation::select(DB::raw('sum(detail_quotations.harga) as total'))
                ->join('detail_quotations', 'detail_quotations.quotation_id', '=', 'proyek_quotations.id')
                ->whereYear('proyek_quotations.created_at', date('Y'))
                ->whereMonth('proyek_quotations.created_at', '=', $i + 1)
                ->first()->total ?? 0;
            array_push($this_year, $month_this);

            $month_last = Quotation::select(DB::raw('sum(detail_quotations.harga) as total'))
                ->join('detail_quotations', 'detail_quotations.quotation_id', '=', 'proyek_quotations.id')
                ->whereYear('proyek_quotations.created_at', date('Y') - 1)
                ->whereMonth('proyek_quotations.created_at', '=', $i + 1)
                ->first()->total ?? 0;
            array_push($last_year, $month_last);
        }

        return response()->json([
            'this_year' => $this_year,
            'last_year' => $last_year
        ]);
    }
}
