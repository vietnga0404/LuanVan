<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function getSchedule() {
        return view("students.thoikhoabieu.danhsach");
    }
}
