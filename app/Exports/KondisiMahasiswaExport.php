<?php

namespace App\Exports;

use App\Models\KondisiMahasiswa;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class KondisiMahasiswaExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.kondisi-mahasiswa-table', [
            'records' => KondisiMahasiswa::all()
        ]);
    }

    public function title(): string
    {
        return 'Kondisi Mahasiswa';
    }
}