<?php

namespace App\Exports;

use App\Models\PenggunaanDana;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PenggunaanDanaExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        // Mengambil data urut berdasarkan kategori untuk memudahkan pengelompokan di Blade
        return view('exports.penggunaan-dana-table', [
            'records' => PenggunaanDana::orderBy('category')->get()
        ]);
    }

    public function title(): string
    {
        return 'Laporan Penggunaan Dana';
    }
}