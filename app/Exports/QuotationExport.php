<?php

namespace App\Exports;

use App\Models\Quotation;
use Illuminate\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class QuotationExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        return view('quotation.excel', [
            'quotations' => Quotation::all()
        ]);
    }
}
