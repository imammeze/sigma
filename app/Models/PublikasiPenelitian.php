<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublikasiPenelitian extends Model
{
    protected $fillable = [
        'nama_dtpr',
        'judul_penelitian',
        'jenis_publikasi',
        'tahun_terbit',
        'link_bukti',
    ];
}