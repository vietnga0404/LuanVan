<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiGiang extends Model
{
    use HasFactory;
    protected $table = 'baigiang';
    protected $primaryKey = 'b_mabai';
    protected $keyType = 'string';
    protected $guarded = [];
}
