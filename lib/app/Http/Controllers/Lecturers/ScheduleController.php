<?php

namespace App\Http\Controllers\Lecturers;

use App\Http\Controllers\Controller;
use App\Models\LichDay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ScheduleController extends Controller
{
    // 
    public function getLich()
    {

        return view('lecturers.lichday.listlich');
    }
    public function findLich(Request $request)
    {
        $data['lichday'] = DB::table('lichday')
            ->join('mon', 'lichday.ld_mon', '=', 'mon.m_mamon')
            ->join('lop', 'lichday.ld_lop', '=', 'lop.l_malop')
            ->join('baigiang', 'lichday.ld_baigiang', '=', 'baigiang.b_mabai')
            ->join('thu', 'lichday.ld_thu', '=', 'thu.mathu')
            ->join('buoi', 'lichday.ld_buoi', '=', 'buoi.mabuoi')
            ->join('giangvien', 'lichday.ld_gv', '=', 'giangvien.gv_ma');


        if (!empty($request->get('lop'))) {
            $data['lichday'] = $data['lichday']->where('ld_lop', '=', $request->get('lop'));
        }
        if (!empty($request->get('mon'))) {
            $data['lichday'] = $data['lichday']->where('ld_mon', '=', $request->get('mon'));
        }
        if (!empty($request->get('giangvien'))) {
            $data['lichday'] = $data['lichday']->where('ld_gv', '=', $request->get('giangvien'));
        }
        $data['lichday'] = $data['lichday']->get();


        if (count($data['lichday']) > 0) { 
            $data['lop'] = $data['lichday'][0]->l_tenlop;
            $data['mon'] = $data['lichday'][0]->m_tenmon;
            $data['tungay'] = $data['lichday'][0]->ld_tungay;
            $data['denngay'] = $data['lichday'][0]->ld_denngay;
            $data['diadiem'] = $data['lichday'][0]->ld_diadiem;

            $data['ngay'] = $data['lichday'][0]->created_at;

            return view('lecturers.lichday.danhsach', $data);
        }

        return view('lecturers.lichday.note');
    }
}
