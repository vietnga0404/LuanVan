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
    public function getList(Request $request)
    {

        $data['lich'] = null;
        $query = DB::table('lichday')
            ->select('lop.l_tenlop', 'mon.m_tenmon', 'lichday.ld_status', 'lichday.ld_lop', 'lichday.ld_mon')
            ->join('lop', 'lichday.ld_lop', '=', 'lop.l_malop')
            ->join('mon', 'lichday.ld_mon', '=', 'mon.m_mamon')
            ->distinct();

        if (!empty($request->get('lop'))) {
            $query = $query->where('ld_lop', '=', $request->get('lop'));
        }

        if (!empty($request->get('mon'))) {
            $query = $query->where('ld_mon', '=', $request->get('mon'));
        }

        if (!empty($request->get('key'))) {
            $query->where('ld_baigiang', 'like', '%' . $request->get('key') . '%');
        }
        $data['lich'] = $query->orderBy('ld_malich', 'desc')->get();

        $data['lich'] = $query->orderBy('ld_malich', 'desc')->get();

        return view('departments.phancong.phancong', $data);
    }
    public function getGV(Request $request)
    {
        $data['lich'] = DB::table('lichday')
            ->join('mon', 'lichday.ld_mon', '=', 'mon.m_mamon')
            ->join('lop', 'lichday.ld_lop', '=', 'lop.l_malop')
            ->join('baigiang', 'lichday.ld_baigiang', '=', 'baigiang.b_mabai')
            ->join('thu', 'lichday.ld_thu', '=', 'thu.mathu')
            ->join('buoi', 'lichday.ld_buoi', '=', 'buoi.mabuoi')
            ->where('lichday.ld_mon', '=', $request->get('mon'))
            ->where('lichday.ld_lop', '=', $request->get('lop'))
            ->orderBy('ld_malich', 'asc')->get();

        $data['lop'] = $data['lich'][0]->l_tenlop;
        $data['mon'] = $data['lich'][0]->m_tenmon;
        $data['tungay'] = $data['lich'][0]->ld_tungay;
        $data['denngay'] = $data['lich'][0]->ld_denngay;
        $data['diadiem'] = $data['lich'][0]->ld_diadiem;


        $data['listmon'] = $data['lich'][0]->ld_mon;

        $listmon = Mon::where('m_mamon', '=', $data['listmon'])->first();
        $data['giangvien'] = GiangVien::where('gv_khoa', '=', $listmon->m_khoa)->get();


        // dd($data);

        return view('departments.phancong.giangvien', $data);
    }

    public function postGV(Request $request)
    {
        $data = $request->all();

        foreach ($data['data'] as $key => $value) {
            $lich = LichDay::find(['ld_malich' => $key])->first();

            $checkGV = $this->checkSttGV($value, $lich);

            if (!$checkGV) {
                return back()->withInput()->with('error', 'Có giảng viên đã bị trùng lịch! Vui lòng phân công lại.');
            }
            $lich->ld_gv = $value;
            $lich->ld_status = 1;
            $lich->save();
        }

        return redirect()->intended('lanhdaokhoa/phancong');
    }

    public function checkSttGV($gvId, $lichDay)
    {
        $lichs = LichDay::where('ld_gv', '=', $gvId)
            ->where('ld_ngay', '=', $lichDay->ld_ngay)->get();

        if (count($lichs)) return false;
        return true;
    }

    public function getSchduleGV(Request $request)
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

        return view('departments.phancong.lichday', $data);
    }

    public function EditGV($mon, $lop)
    {
        $data['lich'] = DB::table('lichday')
            ->join('mon', 'lichday.ld_mon', '=', 'mon.m_mamon')
            ->join('lop', 'lichday.ld_lop', '=', 'lop.l_malop')
            ->join('baigiang', 'lichday.ld_baigiang', '=', 'baigiang.b_mabai')
            ->join('thu', 'lichday.ld_thu', '=', 'thu.mathu')
            ->join('buoi', 'lichday.ld_buoi', '=', 'buoi.mabuoi')
            ->join('giangvien', 'lichday.ld_gv', '=', 'giangvien.gv_ma')
            ->where('lichday.ld_mon', '=', $mon)
            ->where('lichday.ld_lop', '=', $lop)
            ->orderBy('ld_malich', 'asc')->get();

        $data['lop'] = $data['lich'][0]->l_tenlop;
        $data['mon'] = $data['lich'][0]->m_tenmon;
        $data['tungay'] = $data['lich'][0]->ld_tungay;
        $data['denngay'] = $data['lich'][0]->ld_denngay;
        $data['diadiem'] = $data['lich'][0]->ld_diadiem;

        $data['listmon'] = $data['lich'][0]->ld_mon;

        $listmon = Mon::where('m_mamon', '=', $data['listmon'])->first();
        $data['giangvien'] = GiangVien::where('gv_khoa', '=', $listmon->m_khoa)
            ->get();

        $data['phanCong'] = [
            'mon' => $mon,
            'lop' => $lop
        ];
        // dd($data);
        return view('departments.phancong.editlich', $data);
    }
    // public function postEditGV(Request $request)
    // {
    //     $data = $request->all();
    //     $data = $request['data'];

    //     // dd($data);

    //     foreach ($data as $key => $value) {
    //         $lich = LichDay::find(['ld_malich' => $key])->first();


    //         $checkGV = $this->checkSttGV($value, $lich);

    //         if (!$checkGV) {
    //             return back()->withInput()->with('error', 'Có giảng viên đã bị trùng lịch! Vui lòng phân công lại.');
    //         }

    //         $lich->ld_gv = $value;

    //         $lich->save();
    //     }

    //     return redirect()->intended('lanhdaokhoa/phancong');
    // }
    public function getDeleteGV(Request $request)
    {

        $lichday = DB::table('lichday')
            ->where('lichday.ld_mon', '=', $request->get('mon'))
            ->where('lichday.ld_lop', '=', $request->get('lop'))
            ->delete();

        // dd($lichday);

        return redirect()->intended('bandaotao/phancong');
    }
}
