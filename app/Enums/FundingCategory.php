<?php

namespace App\Enums;

enum FundingCategory: string {
    case BPP     = 'bpp';
    case YAYASAN = 'yayasan';
    case LUAR    = 'luar';
    case LAINNYA = 'lainnya'; 
}