<?php

namespace App\Http\Controllers\Departments;

use App\Http\Controllers\Controller;
use App\Models\GiangVien;
use App\Models\Khoa;
use App\Models\LichDay;
use App\Models\Mon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssignController extends Controller
{
    //  
    public function getList()
    {
        $data['lich'] = DB::table('lichday')
            ->join('mon', 'lichday.ld_mon', '=', 'mon.m_mamon')
            ->join('lop', 'lichday.ld_lop', '=', 'lop.l_malop')
            ->get();

        return view('departments.phancong.danhsach', $data);
    }
    public function getGV($id)
    {
        $data['lich'] = LichDay::find($id);

        $data['lichday'] = DB::table('lichday')
            ->join('mon', 'lichday.ld_mon', '=', 'mon.m_mamon')
            ->join('lop', 'lichday.ld_lop', '=', 'lop.l_malop')
            // ->join('baigiang', 'lichday.ld_baigiang', '=', 'baigiang.b_mabai')
            // ->join('buoi', 'lichday.ld_buoi', '=', 'buoi.mabuoi')
            ->where('lichday.ld_malich', '=', $id)
            ->orderBy('ld_malich', 'desc')->get();

        $mon = $data['lich']->ld_mon;
        $mon = Mon::where('m_mamon', '=', $mon)->first();
        $data['giangvien'] = GiangVien::where('gv_khoa', '=', $mon->m_khoa)->get();

        return view('departments.phancong.giangvien', $data);
    }
}
