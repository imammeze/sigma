<?php

namespace App\Exports;

use App\Models\RekognisiLulusan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class RekognisiLulusanExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.rekognisi-lulusan-table', [
            'records' => RekognisiLulusan::all()
        ]);
    }

    public function title(): string
    {
        return 'Rekognisi Lulusan';
    }
}