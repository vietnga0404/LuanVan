<?php

namespace App\Http\Controllers\Departments;

use App\Http\Controllers\Controller;
use App\Models\Mon;
use Illuminate\Http\Request;

class AssignController extends Controller
{
    // 
    public function getList () {
        $data['listlop'] = '\App\Models\Lop'::all();
        $data['listmon'] = Mon::all();
        return view('departments.phancong.danhsach', $data);
    }
}
