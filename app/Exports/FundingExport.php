<?php

namespace App\Exports;

use App\Models\Funding;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class FundingExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.funding-table', [
            'records' => Funding::all()
        ]);
    }

    public function title(): string
    {
        return 'Sumber Pendanaan';
    }
}