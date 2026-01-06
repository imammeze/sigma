<?php

use Illuminate\Support\Facades\Route;
use App\Models\RerataMasaTungguLulus; 
use App\Models\KepuasanPenggunaLulusan;
use Barryvdh\DomPDF\Facade\Pdf;

Route::redirect('/', '/sigma/login');

Route::get('/download-ringkasan-pdf', function () {
    // Logika sederhana untuk mengambil beberapa data ringkasan
    $data = [
        'masa_tunggu' => RerataMasaTungguLulus::all(),
        'kepuasan' => KepuasanPenggunaLulusan::all(),
        'date' => now()->format('d F Y'),
    ];

    // Gunakan template blade khusus untuk ringkasan
    $pdf = Pdf::loadView('exports.ringkasan-akreditasi-pdf', $data)
              ->setPaper('a4', 'portrait');

    return $pdf->stream('Ringkasan_Laporan_Akreditasi.pdf');
})->name('pdf.laporan-ringkas')->middleware('auth');