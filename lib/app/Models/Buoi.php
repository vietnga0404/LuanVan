<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buoi extends Model
{
    use HasFactory;
    protected $table = 'buoi';
    protected $primaryKey = 'mabuoi';
    protected $keyType = 'string';
    protected $guarded = [];
}
