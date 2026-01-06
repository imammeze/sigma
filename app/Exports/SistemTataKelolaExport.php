<?php

namespace App\Exports;

use App\Models\SistemTataKelola;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class SistemTataKelolaExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.sistem-tata-kelola-table', [
            'records' => SistemTataKelola::all()
        ]);
    }

    public function title(): string
    {
        return 'Sistem Tata Kelola';
    }
}