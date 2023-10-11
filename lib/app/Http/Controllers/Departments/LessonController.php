<?php

namespace App\Http\Controllers\Departments;

use App\Http\Controllers\Controller;
use App\Models\Mon;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    //
    public function getLesson() {
        $data['listmon'] = Mon::all();
        return view ('departments.baigiang.addlesson', $data);
    }
}
