<?php 

use App\Models\ChucVu;
use App\Models\Khoa;


function getAllChucVu()
{
    $cv = new ChucVu;
    return $cv->getAll();
}

function getAllKhoa()
{
    $khoa = new Khoa;
    return $khoa->getAll();
}
