<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lop extends Model
{
    use HasFactory;
    protected $table = 'lop';
    protected $primaryKey = 'l_malop';
    protected $keyType = 'string';
    protected $guarded = [];

     
}
 