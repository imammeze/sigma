<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KerjasamaPenelitian extends Model
{
    protected $fillable = [
        'judul_kerjasama',
        'mitra_kerjasama',
        'sumber',
        'durasi',
        'ts_2',
        'ts_1',
        'ts',
        'bukti_files',
    ];

    protected $casts = [
        'durasi'      => 'integer',
        'ts_2'        => 'integer',
        'ts_1'        => 'integer',
        'ts'          => 'integer',
        'bukti_files' => 'array',  
    ];
}