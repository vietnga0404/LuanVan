<?php

namespace App\Http\Controllers\Lecturers;

use App\Http\Controllers\Controller;
use App\Models\LichDay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ScheduleController extends Controller
{
    // 
    public function getSchedule()
    {
        return view('lecturers.lichday.listlich');
    }
    public function findSchedule(Request $request, $filters = [])
    {
        $lichday = DB::table('lichday')
            ->join('mon', 'lichday.ld_mon', '=', 'mon.m_mamon')
            ->join('lop', 'lichday.ld_lop', '=', 'lop.l_malop')
            ->join('baigiang', 'lichday.ld_baigiang', '=', 'baigiang.b_mabai')
            ->join('thu', 'lichday.ld_thu', '=', 'thu.mathu')
            ->join('buoi', 'lichday.ld_buoi', '=', 'buoi.mabuoi')
            ->join('giangvien', 'lichday.ld_gv', '=', 'giangvien.gv_ma');


        if (!empty($request->get('lop'))) {
            $lichday = $lichday->where('ld_lop', '=', $request->get('lop'));
        }
        if (!empty($request->get('mon'))) {
            $lichday = $lichday->where('ld_mon', '=', $request->get('mon'));
        }
        if (!empty($request->get('giangvien'))) {
            $lichday = $lichday->where('ld_gv', '=', $request->get('giangvien'));
        }
        $lichday = $lichday->get();

        // dd($lichday);

        return view('lecturers.lichday.danhsach', compact('lichday'));
    }
}
