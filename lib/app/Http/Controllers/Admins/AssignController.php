<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\BaiGiang;
use App\Models\Lop;
use App\Models\LichDay;
use App\Models\Mon;
use App\Models\Buoi;
use App\Models\Thu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AssignController extends Controller
{
    const THU = [
        'Chủ nhật' => 0,
        'Thứ 2' => 1,
        'Thứ 3' => 2,
        'Thứ 4' => 3,
        'Thứ 5' => 4,
        'Thứ 6' => 5,
        'Thứ 7' => 6,
    ];

    public function getAssign(Request $request,  $filters = [])
    {
        // $data['list'] = Lop::all();

        $data['lich'] = null;
        $query = DB::table('lichday')
            ->select('lop.l_tenlop', 'mon.m_tenmon', 'lichday.ld_status', 'lichday.ld_lop', 'lichday.ld_mon')
            ->join('lop', 'lichday.ld_lop', '=', 'lop.l_malop')
            ->join('mon', 'lichday.ld_mon', '=', 'mon.m_mamon')
            ->join('baigiang', 'lichday.ld_baigiang', '=', 'baigiang.b_mabai')
            ->join('thu', 'lichday.ld_thu', '=', 'thu.mathu')
            ->distinct();

        $filters = [];
        $key = null;

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

        return view('admins.phancong.phancong', $data);
    }
    public function getMon()
    {
        $data['listmon'] = Mon::all();
        return view('admins.phancong.danhsachmon', $data);
    }
    public function getAddLop($ma)
    {
        $data['mon'] = Mon::find($ma);
        $data['listlop'] = '\App\Models\Lop'::all();
        return view('admins.phancong.addlop', $data);
    }
    public function postAddLop(Request $request)
    {
        $lichday = new LichDay();
        $lichday->ld_mon = $request->mon;
        $lichday->ld_lop = $request->lop;
        $lichday->ld_tungay = $request->tungay;
        $lichday->ld_denngay = $request->denngay;
        $lichday->ld_diadiem = $request->diadiem;

        $lichday->save();

        return redirect()->intended('bandaotao/phancong/lop');
    }
    public function getLop(Request $request)
    {
        $data['lich'] = DB::table('lichday')
            ->select('lop.l_tenlop', 'mon.m_tenmon', 'lichday.ld_status', 'lichday.ld_lop', 'lichday.ld_mon', 'mon.m_mamon')
            ->join('mon', 'lichday.ld_mon', '=', 'mon.m_mamon')
            ->join('lop', 'lichday.ld_lop', '=', 'lop.l_malop')
            ->distinct()->orderBy('ld_malich', 'desc')->get();


        // dd($data);

        return view('admins.phancong.danhsachlop', $data);
    }
    public function getDetail($ma, $id)
    {
        $data['mon'] = Mon::find($ma);

        $data['listbai'] = DB::table('baigiang')
            ->join('mon', 'baigiang.b_mon', '=', 'mon.m_mamon')
            ->where('baigiang.b_mon', '=', $ma)
            ->orderBy('b_mabai', 'asc')->get();

        $data['lich'] = LichDay::find($id);

        $data['lich'] = DB::table('lichday')
            ->join('mon', 'lichday.ld_mon', '=', 'mon.m_mamon')
            ->join('lop', 'lichday.ld_lop', '=', 'lop.l_malop')
            ->where('lichday.ld_lop', '=', $id)
            ->orderBy('ld_malich', 'desc')->get();

        $data['chitiet'] = Buoi::all();

        $data['thu'] = Thu::all();

        $data['phanCong'] = [
            'ma' => $ma,
            'id' => $id
        ];

        $data['lop'] = $data['lich'][0]->l_tenlop;
        $data['mon'] = $data['lich'][0]->m_tenmon;
        $data['tungay'] = $data['lich'][0]->ld_tungay;
        $data['denngay'] = $data['lich'][0]->ld_denngay;
        $data['diadiem'] = $data['lich'][0]->ld_diadiem;
        // dd($data);

        return view('admins.phancong.chitiet', $data);
    }
    public function postDetail(Request $request, $ma, $id)
    {
        $request = $request->all();
        $data = $request['data'];

        if ($this->checkDuplicateDay($data)) {
            return back()->withInput()->with('error', 'Thời gian phân công đã bị trùng! Vui lòng phân công lại.');
        }

        $dateInserts = [];

        $lichday = LichDay::where('ld_lop', '=', $id)
            ->where('ld_mon', '=', $ma)
            ->first();

        foreach ($data as $key => $lich) {
            $dateInserts[] = [
                "ld_mon" => $ma,
                "ld_lop" => $lichday->ld_lop,
                "ld_tungay" => $lichday->ld_tungay,
                "ld_denngay" => $lichday->ld_denngay,
                "ld_diadiem" => $lichday->ld_diadiem,
                "ld_baigiang" => $key,
                "ld_ngay" => $lich['ngay'],
                "ld_thu" => self::THU[$lich['thu']],
                "ld_buoi" => $lich['buoi'],
                "ld_status" => 0,
                "created_at" => $lichday->created_at,
                "updated_at" => Carbon::now(),
            ];
        }

        LichDay::insert($dateInserts);

        $lichday->delete();
        return redirect()->intended('bandaotao/phancong');
    }

    public function checkDuplicateDay($data)
    {
        $dates = array_map(function ($item) {
            return $item['ngay'];
        }, $data);

        $checkDuplicate = array_count_values($dates);

        if (count($checkDuplicate) == count($dates)) return false;

        foreach ($checkDuplicate as $key => $value) {
            if ($value > 1) {
                $keys = array_keys($dates, $key);
                $buoi = $data[$keys[0]]['buoi'];

                foreach ($keys as $index => $keyCheck) {
                    if ($index != 0 && $buoi == $data[$keyCheck]['buoi']) return true;
                }
            }
        }

        return false;
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

        return view('admins.phancong.lichday', $data);
    }

    public function EditLichDay(Request $request)
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
            ->orderBy('ld_malich', 'desc')->get();

        $data['lop'] = $data['lich'][0]->l_tenlop;
        $data['mon'] = $data['lich'][0]->m_tenmon;
        $data['tungay'] = $data['lich'][0]->ld_tungay;
        $data['denngay'] = $data['lich'][0]->ld_denngay;
        $data['diadiem'] = $data['lich'][0]->ld_diadiem;

        $data['chitiet'] = Buoi::all();


        // dd($data);

        return view('admins.phancong.editlich', $data);
    }

    public function postEdit()
    {


        return redirect()->intended('bandaotao/phancong');
    }

    public function getDelete(Request $request)
    {

        $lichday = DB::table('lichday')
            ->where('lichday.ld_mon', '=', $request->get('mon'))
            ->where('lichday.ld_lop', '=', $request->get('lop'))
            ->delete();
        
        // dd($lichday);

        return redirect()->intended('bandaotao/phancong');
    }
}
