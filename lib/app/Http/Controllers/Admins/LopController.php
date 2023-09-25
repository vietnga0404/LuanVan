<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admins\AddLopRequest;
use App\Http\Requests\Admins\EditLopRequest;
use App\Models\Lop;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LopController extends Controller
{
    //
    public function getLop () {
        $data['listlop'] = Lop::all();
        return view('admins.lop.addlop', $data);
    }

    public function postLop (AddLopRequest $request) {
        $lop = new Lop;
        $lop->l_khoahoc = $request->khoa;
        $lop->l_hinhthuc = $request->hinhthuc;
        $lop->l_malop = $request->ma;
        $lop->l_tenlop = $request->name;
        $lop->l_slug = Str::slug($request->name);
        $lop->save();

        return back();
    }

    public function getEditLop ($id) {
        $data['lop'] = Lop::find($id);
        return view('admins.lop.editlop', $data);
    }

    public function postEditLop (EditLopRequest $request, $id) {
        $lop = Lop::find($id);
        $lop->l_khoahoc = $request->khoa;
        $lop->l_hinhthuc = $request->hinhthuc;
        $lop->l_malop = $request->ma;
        $lop->l_tenlop = $request->name;
        $lop->l_slug = Str::slug($request->name);
        $lop->save();

        return redirect()->intended('admin/lop');
    }

    public function getDeleteLop ($id) {
        Lop::destroy($id);
        return back();
    }
}
