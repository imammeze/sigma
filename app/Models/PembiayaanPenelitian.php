<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PembiayaanPenelitian extends Model
{
    protected $fillable = [
        'nama_dtpr',
        'judul_penelitian',
        'jumlah_mahasiswa',
        'jenis_hibah_penelitian',
        'sumber',
        'durasi',
        'ts_2',
        'ts_1',
        'ts',
        'link_bukti',
    ];
    
    protected $casts = [
        'jumlah_mahasiswa'=>'integer',
        'durasi'=>'integer',
        'ts_2'=>'integer',
        'ts_1'=>'integer',
        'ts'=>'integer',
    ];
}