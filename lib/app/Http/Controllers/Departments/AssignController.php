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
            ->join('baigiang', 'lichday.ld_baigiang', '=', 'baigiang.b_mabai')
            ->join('thu', 'lichday.ld_thu', '=', 'thu.mathu')
            ->join('buoi', 'lichday.ld_buoi', '=', 'buoi.mabuoi')
            ->orderBy('ld_malich', 'desc')
            ->get();

        return view('departments.phancong.danhsach', $data);
    }
    public function getGV($id)
    {
        $data['lich'] = LichDay::find($id);

        $data['lichday'] = DB::table('lichday')
            ->join('mon', 'lichday.ld_mon', '=', 'mon.m_mamon')
            ->join('lop', 'lichday.ld_lop', '=', 'lop.l_malop')
            ->join('baigiang', 'lichday.ld_baigiang', '=', 'baigiang.b_mabai')
            ->join('buoi', 'lichday.ld_buoi', '=', 'buoi.mabuoi')
            ->join('thu', 'lichday.ld_thu', '=', 'thu.mathu')
            ->where('lichday.ld_malich', '=', $id)
            ->orderBy('ld_malich', 'desc')->get();

        $gvIds = DB::table('lichday')
            ->where('ld_ngay', '=', $data['lich']['ld_ngay'])
            ->get('ld_gv');

        $data['ldId'] = $id;

        // $ids = array_map(function ($item) {
        //     if (!is_null($item->ld_gv)) return $item->ld_gv;
        // }, $gvIds->toArray());


        // $ids = array_filter($ids, function ($item) {
        //     if (!is_null($item)) return $item;
        // });

        $mon = $data['lich']->ld_mon;
        $mon = Mon::where('m_mamon', '=', $mon)->first();
        $data['giangvien'] = GiangVien::where('gv_khoa', '=', $mon->m_khoa)
            // ->whereNotIn('gv_ma', $ids)
            ->get();

        return view('departments.phancong.giangvien', $data);
    }

    public function postGV(Request $request, $id)
    {
        $data = $request->all();

        $lichday = LichDay::where('ld_malich', '=', $id)->first();
        $lichday->ld_gv = $data['giang_vien'];
        $lichday->ld_status = 1;

        $lichday->save();

        return redirect()->intended('lanhdaokhoa/phancong');
    }
}
