<?php

namespace App\Http\Controllers\Departments;

use App\Http\Controllers\Controller;
use App\Http\Requests\Departments\EditLecturerRequest;
use App\Http\Requests\Departments\AddLecturerRequest;
use App\Models\GiangVien;
use App\Models\Khoa;
use App\Models\TrinhDo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LecturerController extends Controller
{ 
    //
    public function getLecturer(Request $request,  $filters = []) 
    {
        $data['listkhoa'] = '\App\Models\Khoa'::all();
        $data['listtrinhdo'] = TrinhDo::all();
        $data['listgv'] = null;
        $query = DB::table('giangvien')
            ->join('khoa', 'giangvien.gv_khoa', '=', 'khoa.k_makhoa')
            ->join('trinhdo', 'giangvien.gv_trinhdo', '=', 'trinhdo.td_id');

        $filters = [];
        $key = null;

        if(!empty($request->get('trinhdo'))) {
            $query = $query->where('gv_trinhdo', '=', $request->get('trinhdo'));
        }

        if(!empty($request->get('thuockhoa'))) {
            $query = $query->where('gv_khoa', '=', $request->get('thuockhoa'));
        }

        if(!empty($request->get('key'))) {
            $query->where('gv_ten', 'like', '%' .$request->get('key'). '%');
        }
        $data['listgv'] = $query->orderBy('gv_ten', 'asc')->paginate(10);
 
        return view('departments.giangvien.addgiangvien', $data);
    }
    public function postLecturer(AddLecturerRequest $request)
    {
        $giangvien = new GiangVien;
        $giangvien->gv_ma = $request->ma;
        $giangvien->gv_ten = $request->name;
        $giangvien->gv_gioitinh = $request->gioitinh;
        $giangvien->gv_sdt = $request->sdt;
        $giangvien->gv_trinhdo = $request->trinhdo;
        $giangvien->gv_khoa = $request->thuockhoa;
        $giangvien->gv_slug = Str::slug($request->name);
        $giangvien->save();

        return back();
    } 
    public function getEditLecturer($id)
    {
        $data['khoalist'] = '\App\Models\Khoa'::all();
        $data['trinhdolist'] = TrinhDo::all();
        $data['giangvien'] = GiangVien::find($id);
        return view ('departments.giangvien.editgiangvien', $data);
    }
    public function postEditLecturer(EditLecturerRequest $request, $id)
    {
        $giangvien = GiangVien::find($id);
        $giangvien->gv_ma = $request->ma;
        $giangvien->gv_ten = $request->name;
        $giangvien->gv_gioitinh = $request->gioitinh;
        $giangvien->gv_sdt = $request->sdt;
        $giangvien->gv_trinhdo = $request->trinhdo;
        $giangvien->gv_khoa = $request->thuockhoa;
        $giangvien->gv_slug = Str::slug($request->name);
        $giangvien->save();

        return redirect()->intended('lanhdaokhoa/giangvien');
    }
    public function getDeleteLecturer($id)
    {
        GiangVien::destroy($id);
        return back();
    }
}
 
