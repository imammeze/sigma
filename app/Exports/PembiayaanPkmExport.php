<?php

namespace App\Exports;

use App\Models\PembiayaanPkm;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PembiayaanPkmExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.pembiayaan-pkm-table', [
            'records' => PembiayaanPkm::orderBy('nama_dtpr')->get()
        ]);
    }

    public function title(): string
    {
        return 'Pembiayaan PKM';
    }
}