<?php 

use App\Models\ChucVu;
use App\Models\Khoa;
use App\Models\LoaiSach;


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

function getAllLoaiSach()
{
    $loai = new LoaiSach;
    return $loai->getAll();
}