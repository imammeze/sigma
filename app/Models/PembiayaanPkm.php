<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PembiayaanPkm extends Model
{
    protected $fillable = [
        'nama_dtpr',
        'judul_pkm',
        'jumlah_mahasiswa',
        'jenis_hibah_pkm',
        'sumber_dana',
        'durasi',
        'ts_2','ts_1','ts',
        'bukti_pdf',
    ];

    protected $casts = [
        'jumlah_mahasiswa' => 'integer',
        'durasi'           => 'integer',
        'ts_2'             => 'integer',
        'ts_1'             => 'integer',
        'ts'               => 'integer',
    ];
}