<?php

namespace App\Http\Controllers\Departments;

use App\Http\Controllers\Controller;
use App\Http\Requests\Departments\AddLessonRequest;
use App\Http\Requests\Departments\EditLessonRequest;
use App\Models\BaiGiang;
use App\Models\GiangVien;
use App\Models\Mon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LessonController extends Controller
{
    // 
    public function getLesson()
    {
        $data['listmon'] = Mon::all();

        $data['listbai'] = DB::table('baigiang')
            ->join('mon', 'baigiang.b_mon', '=', 'mon.m_mamon')
            ->orderBy('b_mabai', 'desc')->get();
 
        return view('departments.baigiang.addlesson', $data);
    }

    public function getList($ma)
    {
        $data['mon'] = Mon::find($ma);

        $data['listbai'] = DB::table('baigiang')
            ->join('mon', 'baigiang.b_mon', '=', 'mon.m_mamon')
            ->where('baigiang.b_mon' , '=', $ma)
            ->orderBy('b_mabai', 'asc')->get();

        return view('departments.baigiang.listlesson', $data);
    }

    public function postLesson(AddLessonRequest $request)
    {

        $baigiang = new BaiGiang;
        $baigiang->b_mabai = $request->ma;
        $baigiang->b_tenbai = $request->name;
        $baigiang->b_sotiet = $request->sotiet;
        $baigiang->b_mon = $request->thuocmon;
        $baigiang->b_slug = Str::slug($request->name);
        $baigiang->save();

        return back();
    }
    public function getEditLesson($ma, $id)
    {

        $data['listmon'] = Mon::all();
        $data['bai'] = BaiGiang::find($id);
        // $data['ma'] = $ma;
        $data['mon'] = Mon::find($ma);

        return view('departments.baigiang.editlesson', $data);
    }
    public function postEditLesson(EditLessonRequest $request, $ma, $id)
    {
        $baigiang = BaiGiang::find($id);
        $baigiang->b_mabai = $request->ma;
        $baigiang->b_tenbai = $request->name;
        $baigiang->b_sotiet = $request->sotiet;
        $baigiang->b_mon = $request->thuocmon;
        $baigiang->b_slug = Str::slug($request->name);
        $baigiang->save();

        return redirect()->intended('lanhdaokhoa/baigiang/danhsach/'.$ma);
    }

    public function getDeleteLesson($ma, $id)
    {
        BaiGiang::destroy($id);

        return back();
    }
}
