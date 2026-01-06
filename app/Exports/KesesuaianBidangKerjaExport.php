<?php

namespace App\Exports;

use App\Models\KesesuaianBidangKerja;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class KesesuaianBidangKerjaExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.kesesuaian-bidang-kerja-table', [
            'records' => KesesuaianBidangKerja::orderBy('graduation_year_label')->get()
        ]);
    }

    public function title(): string
    {
        return 'Kesesuaian Bidang Kerja';
    }
}