<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KerjasamaPkm extends Model
{
    protected $fillable = [
        'judul_kerjasama',
        'mitra_kerjasama',
        'nama_dosen',
        'sumber',
        'durasi',
        'ts_2',
        'ts_1',
        'ts',
        'status',
        'bukti',
    ];

    protected $casts = [
        'durasi' => 'integer',
        'ts_2'   => 'integer',
        'ts_1'   => 'integer',
        'ts'     => 'integer',
    ];
}