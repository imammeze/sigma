<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RerataBebanDtpr extends Model
{
    protected $fillable = ['nama_dtpr', 'sks_ps_sendiri', 'sks_ps_lain_pt_sendiri', 'sks_pt_lain', 'sks_penelitian', 'sks_pengabdian', 'sks_manajemen_pt_sendiri', 'sks_manajemen_pt_lain', 'total_sks', 'evidence', 'hki'];

    
}
