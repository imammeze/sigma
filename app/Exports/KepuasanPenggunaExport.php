<?php

namespace App\Exports;

use App\Models\KepuasanPenggunaLulusan; // Pastikan nama model sesuai
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class KepuasanPenggunaExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.kepuasan-pengguna-table', [
            'records' => KepuasanPenggunaLulusan::all()
        ]);
    }

    public function title(): string
    {
        return 'Kepuasan Pengguna Lulusan';
    }
}