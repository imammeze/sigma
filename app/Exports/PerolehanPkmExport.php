<?php

namespace App\Exports;

use App\Models\PerolehanPkm;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PerolehanPkmExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.perolehan-pkm-table', [
            // Urutkan berdasarkan tahun perolehan terbaru
            'records' => PerolehanPkm::orderBy('tahun_perolehan', 'desc')->get()
        ]);
    }

    public function title(): string
    {
        return 'Perolehan PKM';
    }
}