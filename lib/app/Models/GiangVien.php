<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GiangVien extends Model
{
    use HasFactory;
    protected $table = 'giangvien';
    protected $primaryKey = 'gv_ma';
    protected $keyType = 'string';
    protected $guarded = [];

    function getAll()
    {
        $giangvien = DB::table($this->table)
        ->orderBy('gv_ma','asc')
        ->get();

        return $giangvien;
    }
}
 