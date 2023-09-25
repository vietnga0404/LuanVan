<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mon extends Model
{
    use HasFactory;
    protected $table = 'mon';
    protected $primaryKey = 'm_mamon';
    protected $keyType = 'string';
    protected $guarded = [];
}
