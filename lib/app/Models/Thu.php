<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thu extends Model
{
    use HasFactory;
    protected $table = 'thu';
    protected $primaryKey = 'mathu';
    protected $keyType = 'integer';
    protected $guarded = [];
}
