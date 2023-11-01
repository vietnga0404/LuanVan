<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Khoa extends Model
{
    use HasFactory;

    protected $table = 'khoa';
    protected $primaryKey = 'k_makhoa';
    protected $keyType = 'string';
    protected $guarded = [];


    function getAll()
    {
        $khoa = DB::table($this->table)
        ->orderBy('k_makhoa','asc')
        ->get();

        return $khoa;
    }


}
