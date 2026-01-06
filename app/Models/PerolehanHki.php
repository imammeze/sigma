<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerolehanHki extends Model
{
    protected $fillable = [
        'judul', 
        'jenis_hki', 
        'tahun_terbit', 
        'tanggal_terbit', 
        'link_bukti',
    ];

    protected $casts = [
        'tanggal_terbit' => 'date',
    ];
}