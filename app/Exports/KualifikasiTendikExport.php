<?php

namespace App\Exports;

use App\Models\KualifikasiTendik;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class KualifikasiTendikExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.kualifikasi-tendik-table', [
            'records' => KualifikasiTendik::all()
        ]);
    }

    public function title(): string
    {
        return 'Kualifikasi Tendik';
    }
}