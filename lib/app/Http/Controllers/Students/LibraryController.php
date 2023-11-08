<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\LoaiSach;
use App\Models\ThuVien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibraryController extends Controller
{
    //
    public function index(Request $request, $filters = [])
    {
        $data['loaisach'] = LoaiSach::all();
        $data['thuvien'] = null;
        $query = DB::table('thuvien')
        ->join('loaisach', 'thuvien.loai', '=', 'loaisach.maloai');

        $filters = [];
        $key = null;

        if (!empty($request->get('key'))) {
            $query->where('tensach', 'like', '%' . $request->get('key') . '%');
        }
        if(!empty($request->get('loaisach'))) {
            $query = $query->where('loai', '=', $request->get('loaisach'));
        }
        if(!empty($request->get('tensach'))) {
            $query = $query->where('tensach', '=', $request->get('tensach'));
        }

        $data['thuvien'] = $query->orderBy('id', 'asc')->get();

            return view("students.thuvien.danhsach", $data);
    }
    public function getLoai($id)
    {
        $data['loaisach'] = LoaiSach::all();

        $data['loai'] = LoaiSach::find($id);
        $data['sach'] = DB::table('thuvien')
            ->join('loaisach', 'thuvien.loai', '=', 'loaisach.maloai')
            ->where('thuvien.loai', '=', $id)
            ->orderBy('id', 'asc')->get();

        return view('students.thuvien.loaisach', $data);
    }
}
