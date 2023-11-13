<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\BaiGiang;
use App\Models\LichDay;
use App\Models\Mon;
use App\Models\Buoi;
use App\Models\Thu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $data['lich'] = null;
        $query = DB::table('lichday')
            ->join('lop', 'lichday.ld_lop', '=', 'lop.l_malop')
            ->join('mon', 'lichday.ld_mon', '=', 'mon.m_mamon')
            ->join('baigiang', 'lichday.ld_baigiang', '=', 'baigiang.b_mabai')
            ->join('thu', 'lichday.ld_thu', '=', 'thu.mathu');

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
    public function getLop()
    {
        $data['lich'] = DB::table('lichday')
            ->join('mon', 'lichday.ld_mon', '=', 'mon.m_mamon')
            ->join('lop', 'lichday.ld_lop', '=', 'lop.l_malop')
            ->orderBy('ld_malich', 'desc')->get();

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
            ->where('lichday.ld_malich', '=', $id)
            ->orderBy('ld_malich', 'desc')->get();

        $data['chitiet'] = Buoi::all();

        $data['thu'] = Thu::all();

        $data['phanCong'] = [
            'ma' => $ma,
            'id' => $id
        ];

        return view('admins.phancong.chitiet', $data);
    }
    public function postDetail(Request $request, $ma, $id)
    {
        $data = $request->all();
        $lichdays = LichDay::where('ld_baigiang', '=', $data['baigiang'])
            ->where('ld_malich', '=', $id)
            ->where('ld_mon', '=', $ma)
            ->get();

        if (!count($lichdays)) {
            $lichday = LichDay::where('ld_malich', '=', $id)->first();
            $lichday->ld_baigiang = $data['baigiang'];
            $lichday->ld_ngay = $data['ngay'];
            $lichday->ld_thu = self::THU[$data['thu']];
            $lichday->ld_buoi = $data['buoi'];
            $lichday->ld_status = 0;

            $lichday->save();

            return redirect()->intended('bandaotao/phancong');
        } else {
            return back()->withInput()->with('error', 'Bài giảng đã được phân công!');
        }
    }

    public function getEdit($id)
    {
        $data['lich'] = LichDay::find($id);

        $data['lich'] = DB::table('lichday')
            ->join('mon', 'lichday.ld_mon', '=', 'mon.m_mamon')
            ->join('lop', 'lichday.ld_lop', '=', 'lop.l_malop')
            ->join('baigiang', 'lichday.ld_baigiang', '=', 'baigiang.b_mabai')
            ->join('thu', 'lichday.ld_thu', '=', 'thu.mathu')
            ->join('buoi', 'lichday.ld_buoi', '=', 'buoi.mabuoi')
            ->where('lichday.ld_malich', '=', $id)
            ->orderBy('ld_malich', 'desc')->get();

        return view('admins.phancong.editphancong', $data);
    }

    public function getDelete($id)
    {
        LichDay::destroy($id);
        return back();
    }
}
