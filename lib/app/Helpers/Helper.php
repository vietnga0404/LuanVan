<?php 

use App\Models\TrinhDo;
use App\Models\GiangVien;
use App\Models\Khoa;
use App\Models\LoaiSach;
use App\Models\Lop;
use App\Models\Mon;


function getAllTrinhDo()
{
    $td = new TrinhDo;
    return $td->getAll();
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

function getAllGV()
{
    $giangvien = new GiangVien;
    return $giangvien->getAll();
}