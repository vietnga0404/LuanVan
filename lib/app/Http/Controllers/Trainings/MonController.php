<?php

namespace App\Http\Controllers\Trainings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Trainings\AddMonRequest;
use App\Http\Requests\Trainings\EditMonRequest;
use App\Models\Khoa;
use App\Models\Mon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
 
class MonController extends Controller
{ 
    //  
    public function getMon(Request $request) 
    {
        $data['listkhoa'] = '\App\Models\Khoa'::all();
        $data['listmon'] = null;
        $query = DB::table('mon')
            ->join('khoa', 'mon.m_khoa', '=', 'khoa.k_makhoa');

        if(!empty($request->get('thuockhoa'))){
            $query = $query->where('m_khoa', '=', $request->get('thuockhoa'));
        }

        if(!empty($request->get('key'))){
            $query->where('m_tenmon', 'like', '%'.$request->get('key').'%');
        }

        $data['listmon'] = $query->orderBy('m_mamon', 'asc')->paginate(10);

        return view('trainings.mon.addmon', $data);
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
        $data['khoalist'] = '\App\Models\Khoa'::all();
        $data['mon'] = Mon::find($id);
        return view('trainings.mon.editmon', $data);
    }

    public function postEditMon(EditMonRequest $request, $id){
        $mon = Mon::find($id);
        $mon->m_mamon = $request->ma;
        $mon->m_tenmon = $request->name;
        $mon->m_khoa = $request->thuockhoa;
        $mon->m_slug = Str::slug($request->name);
        $mon->save();

        return redirect()->intended('bandaotao/mon');
    } 

    public function getDeleteMon($id) { 
        Mon::destroy($id);
        return back();
    }

    public function getListLesson($id){
        
        $data['mon'] = Mon::find($id);

        $data['listbai'] = DB::table('baigiang')
            ->join('mon', 'baigiang.b_mon', '=', 'mon.m_mamon')
            ->where('baigiang.b_mon' , '=', $id)
            ->orderBy('b_mabai', 'asc')->paginate(10);

        return view('trainings.mon.baigiang', $data);
    }
}