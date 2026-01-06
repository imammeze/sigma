<?php

namespace App\Exports;

use App\Models\KeberagamanAsalMahasiswa;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class KeberagamanAsalMahasiswaExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.keberagaman-asal-mahasiswa-table', [
            'records' => KeberagamanAsalMahasiswa::all()
        ]);
    }

    public function title(): string
    {
        return 'Keberagaman Asal Mahasiswa';
    }
}