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
    public function getLop(Request $request,  $filters = [])
    {
        $listlop = '\App\Models\Lop'::query();

        $filters = [];
        $key = null;

        if (!empty($request->get('hinhthuc'))) {
            $listlop = $listlop->where('l_hinhthuc', '=', $request->get('hinhthuc'));
        }

        if (!empty($request->get('key'))) {
            $listlop->where('l_tenlop','like', '%' .$request->get('key').'%');
        }

        $listlop = $listlop->get();

        return view('admins.lop.addlop', compact('filters', 'listlop'));
    }

    public function postLop(AddLopRequest $request)
    {
        $lop = new Lop;
        $lop->l_khoahoc = $request->khoa;
        $lop->l_hinhthuc = $request->hinhthuc;
        $lop->l_malop = $request->ma;
        $lop->l_tenlop = $request->name;
        $lop->l_slug = Str::slug($request->name);
        $lop->save();

        return back();
    }

    public function getEditLop($id)
    {
        $data['lop'] = '\App\Models\Lop'::find($id);
        return view('admins.lop.editlop', $data);
    }

    public function postEditLop(EditLopRequest $request, $id)
    {
        $lop = '\App\Models\Lop'::find($id);
        $lop->l_khoahoc = $request->khoa;
        $lop->l_hinhthuc = $request->hinhthuc;
        $lop->l_malop = $request->ma;
        $lop->l_tenlop = $request->name;
        $lop->l_slug = Str::slug($request->name);
        $lop->save();

        return redirect()->intended('bandaotao/lop');
    }

    public function getDeleteLop($id)
    {
        '\App\Models\Lop'::destroy($id);
        return back();
    }
}
