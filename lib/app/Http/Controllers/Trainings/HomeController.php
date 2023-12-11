<?php

namespace App\Http\Controllers\Trainings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHome (){
        return view('trainings.homepage.home');
    }
}
