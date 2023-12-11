<?php

namespace App\Http\Controllers\Trainings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Trainings\AddLopRequest;
use App\Http\Requests\Trainings\EditLopRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use  App\Models\Lop;

class LopController extends Controller
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

        $listlop = $listlop->orderBy('created_at', 'desc')->paginate(10);

        return view('trainings.lop.addlop', compact('listlop'));
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
        return view('trainings.lop.editlop', $data);
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
