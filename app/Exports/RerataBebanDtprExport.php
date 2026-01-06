<?php

namespace App\Exports;

use App\Models\RerataBebanDtpr;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class RerataBebanDtprExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.rerata-beban-dtpr-table', [
            'records' => RerataBebanDtpr::all()
        ]);
    }

    public function title(): string
    {
        return 'Rerata Beban DTPR';
    }
}