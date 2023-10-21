<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ChucVu extends Model
{
    use HasFactory;
    protected $table = 'chucvu';
    protected $primaryKey = 'cv_id';
    protected $keyType = 'integer';
    protected $guarded = [];

    public function getAll()
    {
        $cv = DB::table($this->table)
            ->orderBy('cv_id', 'asc')->get();
        return $cv;
    }

}
