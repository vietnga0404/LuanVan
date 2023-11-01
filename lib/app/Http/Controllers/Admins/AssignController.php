<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\LichDay;
use App\Models\Mon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssignController extends Controller
{
    //  
    public function getAssign()
    {
        $data['lich'] = LichDay::all();

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
            ->orderBy('ld_malich', 'asc')->get();


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

        // $data['lich'] = DB::table('lichday')
        //     ->join('mon', 'lichday.ld_mon', '=', 'mon.m_mamon')
        //     ->join('lop', 'lichday.ld_lop', '=', 'lop.l_malop')
        //     ->orderBy('ld_malich', 'asc')->get();

        return view('admins.phancong.chitiet', $data);
    }
}
