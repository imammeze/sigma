<?php

namespace App\Exports;

use App\Models\PengembanganDtprPenelitian; // Pastikan nama model sesuai
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PengembanganDtprExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.pengembangan-dtpr-table', [
            // Urutkan berdasarkan tahun akademik agar kronologis
            'records' => PengembanganDtprPenelitian::orderBy('tahun_akademik', 'desc')->get()
        ]);
    }

    public function title(): string
    {
        return 'Pengembangan DTPR';
    }
}