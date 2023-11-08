<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    //
    public function getSchedule() {
        return view("students.thoikhoabieu.danhsach");
    }
}
