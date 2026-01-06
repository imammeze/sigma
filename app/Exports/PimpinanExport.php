<?php

namespace App\Exports;

use App\Models\Pimpinan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PimpinanExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.pimpinan-table', [
            'records' => Pimpinan::all()
        ]);
    }

    public function title(): string
    {
        return 'Daftar Pimpinan';
    }
}