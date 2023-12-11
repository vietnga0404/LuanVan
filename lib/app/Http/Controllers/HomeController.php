<?php

namespace App\Http\Controllers;

use App\Models\BaiGiang;
use App\Models\GiangVien;
use App\Models\Lop;
use App\Models\Mon;
use App\Models\Khoa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function getHome()
    {
        return view('homepage.index');
    }
    public function search(Request $request)
    {

        $keyword = $request->get('keyword');

        $resultKhoa = Khoa::where('k_tenkhoa', 'LIKE', '%' . $keyword . '%')->get();
        $resultLop = Lop::where('l_tenlop', 'LIKE', '%' . $keyword . '%')->get();
        $resultMon = Mon::where('m_tenmon', 'LIKE', '%' . $keyword . '%')->get();
        $resultBai = BaiGiang::where('b_tenbai', 'LIKE', '%' . $keyword . '%')->get();
        $resultGV = GiangVien::where('gv_ten', 'LIKE', '%' . $keyword . '%')->get();


        // dd($resultLop, $resultMon,$resultGV, $resultBai);

        return view('homepage.search', compact('resultKhoa', 'resultLop', 'resultMon', 'resultBai', 'resultGV'));
    }
    public function getHoatDong()
    {
        return view('homepage.hoatdong');
    }
    public function getThongTin()
    {
        return view('homepage.thongtin');
    }
    public function getSuKien()
    {
        return view('homepage.sukien');
    }
    public function getThongBao()
    {
        return view('homepage.thongbao');
    }
    public function getVanBan()
    {
        return view('homepage.vanban');
    }
}
