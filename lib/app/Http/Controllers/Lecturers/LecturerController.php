<?php

namespace App\Http\Controllers\Lecturers;

use App\Http\Controllers\Controller;
use App\Models\Lop;
use App\Models\Mon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LecturerController extends Controller
{
    //
    public function getLop(Request $request)
    {
        $listlop = '\App\Models\Lop'::query();


        if (!empty($request->get('hinhthuc'))) {
            $listlop = $listlop->where('l_hinhthuc', '=', $request->get('hinhthuc'));
        }
        if (!empty($request->get('khoa'))) {
            $listlop->where('l_khoahoc', 'like', '%' . $request->get('khoa') . '%');
        }
        if (!empty($request->get('key'))) {
            $listlop->where('l_tenlop', 'like', '%' . $request->get('key') . '%');
        }
        $listlop = $listlop->get();

        return view('lecturers.lop.listlop', compact('filters', 'listlop'));
    }

    public function getMon(Request $request)
    {
        $data['listkhoa'] = '\App\Models\Khoa'::all();
        $data['listmon'] = null;
        $query = DB::table('mon')
        ->join('khoa', 'mon.m_khoa', '=', 'khoa.k_makhoa');

        if(!empty($request->get('thuockhoa'))) {
            $query = $query->where('m_khoa', '=', $request->get('thuockhoa'));
        }

        if(!empty($request->get('key'))) {
            $query->where('m_tenmon', 'like', '%' .$request->get('key'). '%');
        }

        $data['listmon'] = $query->get();
        return view('lecturers.mon.listmon', $data);
    }
    public function getListBai($id)
    {
        $data['mon'] = Mon::find($id);
        $data['listmon'] = Mon::all();
        $data['listbai'] = DB::table('baigiang')
            ->join('mon', 'baigiang.b_mon', '=', 'mon.m_mamon')->where('baigiang.b_mon', '=', $id)
            ->orderBy('b_mabai', 'asc')->get();

        return view('lecturers.mon.baigiang', $data);
    }
   
}
