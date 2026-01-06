<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FleksibilitasPembelajaran extends Model
{
    use HasFactory; 
    
    protected $fillable = [
        'item_label',
        'ts_2',
        'ts_1',
        'ts',
        'evidence_link',
        'sort_order',
    ];
}