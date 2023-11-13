<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mon extends Model
{
    use HasFactory;
    protected $table = 'mon';
    protected $primaryKey = 'm_mamon';
    protected $keyType = 'string';
    protected $guarded = [];

    function getAll()
    {
        $mon = DB::table($this->table)
        ->orderBy('m_mamon','asc')
        ->get();

        return $mon;
    }

}
