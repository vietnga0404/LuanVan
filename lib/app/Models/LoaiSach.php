<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LoaiSach extends Model
{
    use HasFactory;
    protected $table = 'loaisach';
    protected $primaryKey = 'maloai';
    protected $keyType = 'string';
    protected $guarded = [];

    function getAll()
    {
        $loai = DB::table($this->table)
        ->orderBy('maloai','asc')
        ->get();

        return $loai;
    }
}
