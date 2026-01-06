<?php

namespace App\Exports;

use App\Models\KerjasamaPkm;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class KerjasamaPkmExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.kerjasama-pkm-table', [
            'records' => KerjasamaPkm::orderBy('ts', 'desc')->get()
        ]);
    }

    public function title(): string
    {
        return 'Kerjasama PKM';
    }
}