<?php

namespace App\Http\Controllers\Lecturers;

use App\Http\Controllers\Controller;
use App\Models\LichDay;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    //
    public function getSchedule(Request $request, $filters = [])
    {
        $lichday = LichDay::query();

        $filters = [];

        if (!empty($request->get('lop'))) {
            $lichday = $lichday->where('ld_lop', '=', $request->get('lop'));
        }
        if (!empty($request->get('mon'))) {
            $lichday = $lichday->where('ld_mon', '=', $request->get('mon'));
        }
        if (!empty($request->get('giangvien'))) {
            $lichday = $lichday->where('ld_gv', '=', $request->get('giangvien'));
        }

        $lichday = $lichday->get();

        return view('lecturers.lichday.listlich', $lichday);
    }
}
