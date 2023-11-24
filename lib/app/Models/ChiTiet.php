<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTiet extends Model
{
    use HasFactory;
    protected $table = 'chitiet';
    protected $primaryKey = 'ct_id';
    protected $guarded = [];
}
