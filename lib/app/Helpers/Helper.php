<?php 

use App\Models\ChucVu;
use App\Models\Khoa;
use App\Models\LoaiSach;
use App\Models\Lop;
use App\Models\Mon;


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

function getAllLop()
{
    $lop = new Lop;
    return $lop->getAll();
}
function getAllMon()
{
    $mon = new Mon;
    return $mon->getAll();
}