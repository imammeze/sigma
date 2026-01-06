<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnitSpmi extends Model
{
    protected $guarded = [];

    protected $fillable = [
        'jenis_unit_spmi',
        'nama_unit_spmi',
        'dokumen_spmi',
        'jumlah_auditor',
        'certified',
        'non_certified',
        'frekuensi_audit',
        'bukti_certified_auditor',
        'laporan_audit',
    ];

    protected $casts = [
        'jumlah_auditor'   => 'integer',
        'certified'        => 'integer',
        'non_certified'    => 'integer',
        'frekuensi_audit'  => 'integer',
    ];
}