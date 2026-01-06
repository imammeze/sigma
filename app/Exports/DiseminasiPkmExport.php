<?php

namespace App\Exports;

use App\Models\DiseminasiPkm;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class DiseminasiPkmExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.diseminasi-pkm-table', [
            // Urutkan berdasarkan waktu (TS) terbaru
            'records' => DiseminasiPkm::orderBy('waktu', 'desc')->get()
        ]);
    }

    public function title(): string
    {
        return 'Diseminasi PKM';
    }
}