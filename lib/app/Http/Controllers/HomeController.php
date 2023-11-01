<?php

namespace App\Http\Controllers;

use App\Models\Khoa;
use App\Models\LichDay;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function getHome()
    {
        return view('index');
    }
    public function search(Request $request){

        $keyword = $request->get('keyword');
        // dd($keyword);

        $result = Khoa::where('k_tenkhoa','LIKE','%'.$keyword.'%')
        ->orWhere('lop', function($query) use($keyword){
            $query->where('l_tenlop','LIKE','%'.$keyword.'%');
        })
        ->orWhere('mon', function($query) use($keyword){
            $query->where('m_tenmon','LIKE','%'.$keyword.'%');
        })
        ->orWhere('giangvien', function($query) use($keyword){
            $query->where('gv_ten','LIKE','%'.$keyword.'%');
        })
        ->orWhere('lichday', function($query) use($keyword){
            $query->where('ld_baigiang','LIKE','%'.$keyword.'%');
        })
        ->get();
        dd($result);

        return view('homepage.search', ['result' => $result]);
    }
}