<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class TrinhDo extends Model
{
    use HasFactory;
    protected $table = 'trinhdo';
    protected $primaryKey = 'td_id';
    protected $keyType = 'string';
    protected $guarded = [];

    public function getAll()
    {
        $trinhdo = DB::table($this->table)
            ->orderBy('td_id', 'asc')->get();
        return $trinhdo;
    }
}
