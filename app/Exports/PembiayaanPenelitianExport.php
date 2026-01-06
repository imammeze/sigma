<?php

namespace App\Exports;

use App\Models\PembiayaanPenelitian; // Pastikan nama model sesuai
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PembiayaanPenelitianExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.pembiayaan-penelitian-table', [
            'records' => PembiayaanPenelitian::orderBy('nama_dtpr')->get()
        ]);
    }

    public function title(): string
    {
        return 'Pembiayaan Penelitian';
    }
}