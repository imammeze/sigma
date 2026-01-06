<?php

namespace App\Exports;

use App\Models\KerjasamaPenelitian;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class KerjasamaPenelitianExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.kerjasama-penelitian-table', [
            'records' => KerjasamaPenelitian::orderBy('ts', 'desc')->get()
        ]);
    }

    public function title(): string
    {
        return 'Kerjasama Penelitian';
    }
}