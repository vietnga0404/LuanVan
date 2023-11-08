<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThuVien extends Model
{
    use HasFactory;
    protected $table = 'thuvien';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
