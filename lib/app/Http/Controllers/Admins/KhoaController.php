<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Khoa;
use App\Http\Requests\Admins\AddKhoaRequest;
use App\Http\Requests\Admins\EditKhoaRequest;
use Illuminate\Support\Str;

class KhoaController extends Controller
{
    public function getKhoa (){
        $data['listkhoa'] = '\App\Models\Khoa'::all();
        return view('admins.khoa.addkhoa',$data);
    }

    public function postKhoa(AddKhoaRequest $request){
        $khoa = new Khoa;
        $khoa->k_makhoa = $request->ma;
        $khoa->k_tenkhoa = $request->name; 
        $khoa->k_slug = Str::slug($request->name);
        $khoa->save();

        return back();
    }
    public function getEditKhoa ($id){ 
        $data['khoa'] = '\App\Models\Khoa'::find($id);
        return view('admins.khoa.editkhoa', $data);
    }

    public function postEditKhoa(EditKhoaRequest $request, $id) {
        $khoa = '\App\Models\Khoa'::find($id);
        $khoa->k_makhoa = $request->ma;
        $khoa->k_tenkhoa = $request->name;
        $khoa->k_slug = Str::slug($request->name);
        $khoa->save();

        return redirect()->intended('bandaotao/khoa');
    }
    public function getDeleteKhoa ($id){
        '\App\Models\Khoa'::destroy($id);
        return back();
    }

}
