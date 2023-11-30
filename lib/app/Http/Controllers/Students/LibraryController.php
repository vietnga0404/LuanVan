<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\LoaiSach;
use App\Models\ThuVien;
use App\Models\ChiTiet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibraryController extends Controller
{
    //
    public function index(Request $request)
    {
        $data['loaisach'] = LoaiSach::all();

        $ls = LoaiSach::all();

        $data['thuvien'] = null;
        $query = DB::table('thuvien')
            ->join('loaisach', 'thuvien.loai', '=', 'loaisach.maloai');

        if (!empty($request->get('key'))) {
            $query->where('tensach', 'like', '%' . $request->get('key') . '%');
        }
        if (!empty($request->get('loaisach'))) {
            $query = $query->where('loai', '=', $request->get('loaisach'));
        }
        if (!empty($request->get('tensach'))) {
            $query = $query->where('tensach', '=', $request->get('tensach'));
        }

        $data['thuvien'] = $query->orderBy('masach', 'asc')->get();

        return view("students.thuvien.danhsach", compact('ls'), $data);
    }
    public function getLoai($id, Request $request)
    {
        $data['loai'] = LoaiSach::find($id);

        $data['sach'] = DB::table('thuvien')
            ->join('loaisach', 'thuvien.loai', '=', 'loaisach.maloai')
            ->where('thuvien.loai', '=', $id)
            ->orderBy('id', 'asc')->get();

        $ls = LoaiSach::all();


        return view('students.thuvien.loaisach', compact('ls'), $data);
    }

    public function getDetail(Request $request, $id)
    {
        $data['chitiet'] = ChiTiet::find($id);

        $data['chitiet'] = null;
        $query = DB::table('chitiet')
        ->join('thuvien', 'chitiet.sach', '=', 'thuvien.masach')
        ->join('loaisach','chitiet.loai','=','loaisach.maloai')
        ->where('chitiet.sach', '=', $id);

        $data['loaisach'] = LoaiSach::all();

        if (!empty($request->get('key'))) {
            $query->where('tensach', 'like', '%' . $request->get('key') . '%');
        }
        if (!empty($request->get('loaisach'))) {
            $query = $query->where('loai', '=', $request->get('loaisach'));
        }
        if (!empty($request->get('tensach'))) {
            $query = $query->where('tensach', '=', $request->get('tensach'));
        }

        $data['chitiet'] = $query->get();
        // dd($data);
        return view('students.thuvien.chitiet', $data);
    }
}
