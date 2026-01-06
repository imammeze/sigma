<?php

namespace App\Exports;

use App\Models\IsiPembelajaran;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class IsiPembelajaranExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.isi-pembelajaran-table', [
            'records' => IsiPembelajaran::all()
        ]);
    }

    public function title(): string
    {
        return 'Isi Pembelajaran';
    }
}