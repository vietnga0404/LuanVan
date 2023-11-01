<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LichDay extends Model
{
    use HasFactory;
    protected $table = 'lichday';
    protected $primaryKey = 'ld_malich';
    protected $keyType = 'string';

    //them du fields
    protected $fillable = [
        'ld_malich',
        'ld_tungay',
        'ld_denngay',
        'ld_diadiem',
        'ld_ngay',
        'ld_thu',
        'ld_buoi',
        'ld_lop',
        'ld_mon',
        'ld_gv',
        'ld_baigiang',
    ];
}
