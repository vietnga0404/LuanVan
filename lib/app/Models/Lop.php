<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Lop extends Model
{
    use HasFactory;
    protected $table = 'lop';
    protected $primaryKey = 'l_malop';
    protected $keyType = 'string';
    protected $guarded = [];

    function getAll()
    {
        $lop = DB::table($this->table)
        ->orderBy('l_malop','asc')
        ->get();

        return $lop;
    }

}
 