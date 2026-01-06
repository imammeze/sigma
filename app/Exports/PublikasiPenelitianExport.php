<?php

namespace App\Exports;

use App\Models\PublikasiPenelitian;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PublikasiPenelitianExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.publikasi-penelitian-table', [
            // Urutkan berdasarkan tahun terbit terbaru
            'records' => PublikasiPenelitian::orderBy('tahun_terbit', 'desc')->get()
        ]);
    }

    public function title(): string
    {
        return 'Publikasi Penelitian';
    }
}