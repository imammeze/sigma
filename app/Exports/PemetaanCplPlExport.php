<?php

namespace App\Exports;

use App\Models\PemetaanCplPl;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PemetaanCplPlExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.pemetaan-cpl-pl-table', [
            'records' => PemetaanCplPl::all()
        ]);
    }

    public function title(): string
    {
        return 'Pemetaan CPL ke PL';
    }
}