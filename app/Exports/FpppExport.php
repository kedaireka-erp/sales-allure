<?php

namespace App\Exports;

use App\Models\Fppp;
use Illuminate\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class FpppExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        return view('fppps.excel', [
            'fppps' => Fppp::all()
        ]);
    }
}
