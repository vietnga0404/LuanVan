<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function getIndex () {
        return view ('index');
    }

    public function getLogin () {
        return view ('login');
    }
}
