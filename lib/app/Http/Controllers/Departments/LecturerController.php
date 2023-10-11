<?php

namespace App\Http\Controllers\Departments;

use App\Http\Controllers\Controller;
use App\Http\Requests\Departments\EditLecturerRequest;
use App\Http\Requests\Departments\AddLecturerRequest;
use App\Models\ChucVu;
use App\Models\GiangVien;
use App\Models\Khoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LecturerController extends Controller
{
    //
    public function getLecturer()
    {
        $data['listkhoa'] = Khoa::all();
        $data['listgv'] = DB::table('giangvien')
            ->join('khoa', 'giangvien.gv_khoa', '=', 'khoa.k_makhoa')
            ->orderBy('gv_ma', 'asc')->get();

        $data['listchucvu'] = ChucVu::all();
        $data['listgv'] = DB::table('giangvien')
            ->join('chucvu', 'giangvien.gv_chucvu', '=', 'chucvu.cv_id')
            ->orderBy('gv_ma', 'asc')->get();

        return view('departments.giangvien.addgiangvien', $data);
    }
    public function postLecturer(AddLecturerRequest $request)
    {
        $giangvien = new GiangVien;
        $giangvien->gv_ma = $request->ma;
        $giangvien->gv_ten = $request->name;
        $giangvien->gv_gioitinh = $request->gioitinh;
        $giangvien->gv_sdt = $request->sdt;
        $giangvien->gv_chucvu = $request->chucvu;
        $giangvien->gv_khoa = $request->thuockhoa;
        $giangvien->gv_slug = Str::slug($request->name);
        $giangvien->save();

        return back();
    }
    public function getEditLecturer($id)
    {
        $data['khoalist'] = Khoa::all();
        $data['chucvulist'] = ChucVu::all();
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
        $giangvien->gv_chucvu = $request->chucvu;
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
