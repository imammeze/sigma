<?php

namespace App\Exports;

use App\Models\PerolehanHki;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PerolehanHkiExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.perolehan-hki-table', [
            // Urutkan berdasarkan tahun terbaru
            'records' => PerolehanHki::orderBy('tahun_terbit', 'desc')->get()
        ]);
    }

    public function title(): string
    {
        return 'Perolehan HKI';
    }
}