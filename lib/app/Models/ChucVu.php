<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChucVu extends Model
{
    use HasFactory;
    protected $table = 'chucvu';
    protected $primaryKey = 'cv_id';
    protected $keyType = 'integer';
    protected $guarded = [];
}
