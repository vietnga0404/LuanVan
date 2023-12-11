<?php

namespace App\Http\Controllers\Admins;

use App\Models\Lop;
use App\Models\Mon;
use App\Http\Controllers\Controller;
use App\Models\Khoa;
use App\Models\TrinhDo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatisticController extends Controller
{
    //
    public function getKhoa()
    {
        $data['listkhoa'] = Khoa::query()->paginate(10);
        return view('admin.khoa', $data);
    }
    public function getLop(Request $request)
    {
        $listlop = Lop::query()->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.lop', compact('listlop'));
    }
    public function getMon(Request $request)
    {
        $data['listkhoa'] = Khoa::all();
        $data['listmon'] = DB::table('mon')
            ->join('khoa', 'mon.m_khoa', '=', 'khoa.k_makhoa')
            ->orderBy('m_mamon', 'asc')->paginate(10);

        return view('admin.mon', $data);
    }
    public function getBaiGiang($id){
        
        $data['mon'] = Mon::find($id);

        $data['listbai'] = DB::table('baigiang')
            ->join('mon', 'baigiang.b_mon', '=', 'mon.m_mamon')
            ->where('baigiang.b_mon' , '=', $id)
            ->orderBy('b_mabai', 'asc')->paginate(10);

        return view('admin.baigiang', $data);
    }
    public function getGV() 
    {
        $data['listkhoa'] = '\App\Models\Khoa'::all();
        $data['listtrinhdo'] = TrinhDo::all();
        $data['listgv'] = DB::table('giangvien')
            ->join('khoa', 'giangvien.gv_khoa', '=', 'khoa.k_makhoa')
            ->join('trinhdo', 'giangvien.gv_trinhdo', '=', 'trinhdo.td_id')
            ->orderBy('gv_ma', 'asc')->paginate(10);
 
        return view('admin.giangvien', $data);
    }
    public function getLichDay()
    {
        $data['lich'] = null;
        $query = DB::table('lichday')
            ->select('lop.l_tenlop', 'mon.m_tenmon', 'lichday.ld_status', 'lichday.ld_lop', 'lichday.ld_mon')
            ->join('lop', 'lichday.ld_lop', '=', 'lop.l_malop')
            ->join('mon', 'lichday.ld_mon', '=', 'mon.m_mamon')
            ->join('baigiang', 'lichday.ld_baigiang', '=', 'baigiang.b_mabai')
            ->join('thu', 'lichday.ld_thu', '=', 'thu.mathu')
            ->distinct();

        $data['lich'] = $query->orderBy('ld_malich', 'desc')->get();

        return view('admin.lichday', $data);
    }
    public function getSchdule(Request $request)
    {
        $data['lich'] = DB::table('lichday')
            ->join('mon', 'lichday.ld_mon', '=', 'mon.m_mamon')
            ->join('lop', 'lichday.ld_lop', '=', 'lop.l_malop')
            ->join('baigiang', 'lichday.ld_baigiang', '=', 'baigiang.b_mabai')
            ->join('thu', 'lichday.ld_thu', '=', 'thu.mathu')
            ->join('buoi', 'lichday.ld_buoi', '=', 'buoi.mabuoi')
            ->join('giangvien', 'lichday.ld_gv', '=', 'giangvien.gv_ma')
            ->where('lichday.ld_mon', '=', $request->get('mon'))
            ->where('lichday.ld_lop', '=', $request->get('lop'))
            ->orderBy('ld_malich', 'asc')->get();

        $data['lop'] = $data['lich'][0]->l_tenlop;
        $data['mon'] = $data['lich'][0]->m_tenmon;
        $data['tungay'] = $data['lich'][0]->ld_tungay;
        $data['denngay'] = $data['lich'][0]->ld_denngay;
        $data['diadiem'] = $data['lich'][0]->ld_diadiem;

        return view('admin.chitiet', $data);
    }
}
