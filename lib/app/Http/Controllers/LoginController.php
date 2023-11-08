<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function getLogin()
    {
        return view('login');
    }
    public function postLogin(Request $request)
    {
        $user = User::where(['email' => $request->email])
                    ->first();
                    
        if (Hash::check($request->password, $user->password)) {
            Auth::login($user);
            switch ($user->role) {
                case 'bandaotao':
                    return redirect()->intended('bandaotao/home');
                case 'lanhdaokhoa':
                    return redirect()->intended('lanhdaokhoa/home');
                case 'giangvien':
                    return redirect()->intended('giangvien/home');
                default:
                    return redirect()->intended('hocvien/home');
            }
        } else {
            return back()->withInput()->with('error', 'Email hoặc password chưa đúng.');
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->intended('/');
    }

    public function registerForm()
    {
        return view('register');
    }

    public function handleRegister(Request $request)
    {
        $dataValidated = $request->validate([
            'email' => 'required|string|email|unique:user,email',
            'password' => 'required',
            'role' => 'required',
        ]);

        $dataValidated['password'] = Hash::make($dataValidated['password']);

        $user = User::create($dataValidated);

        return redirect()->intended('login');
    }
}
