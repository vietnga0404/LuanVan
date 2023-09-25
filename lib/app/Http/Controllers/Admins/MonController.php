<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admins\AddMonRequest;
use App\Http\Requests\Admins\EditMonRequest;
use App\Models\Khoa;
use App\Models\Mon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MonController extends Controller
{
    //
    public function getMon()
    {
        $data['listkhoa'] = Khoa::all();
        $data['listmon'] = DB::table('mon')
            ->join('khoa', 'mon.m_khoa', '=', 'khoa.k_makhoa')
            ->orderBy('m_mamon', 'asc')->get();
        return view('admins.mon.addmon', $data);
    }
    public function postMon(AddMonRequest $request)
    {
        $mon = new Mon;
        $mon->m_mamon = $request->ma;
        $mon->m_tenmon = $request->name;
        $mon->m_khoa = $request->thuockhoa;
        $mon->m_slug = Str::slug($request->name);
        $mon->save();

        return back();
    }
    public function getEditMon($id){
        $data['khoalist'] = Khoa::all();
        $data['mon'] = Mon::find($id);
        return view('admins.mon.editmon', $data);
    }

    public function postEditMon(EditMonRequest $request, $id){
        $mon = Mon::find($id);
        $mon->m_mamon = $request->ma;
        $mon->m_tenmon = $request->name;
        $mon->m_khoa = $request->thuockhoa;
        $mon->m_slug = Str::slug($request->name);
        $mon->save();

        return redirect()->intended('admin/mon');
    }

    public function getDeleteMon($id) {
        Mon::destroy($id);
        return back();
    }
}
