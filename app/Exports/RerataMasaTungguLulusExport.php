<?php

namespace App\Exports;

use App\Models\RerataMasaTungguLulus;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class RerataMasaTungguLulusExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.rerata-masa-tunggu-table', [
            // Urutkan berdasarkan tahun lulus agar rapi
            'records' => RerataMasaTungguLulus::orderBy('graduation_year_label')->get()
        ]);
    }

    public function title(): string
    {
        return 'Masa Tunggu Lulus';
    }
}