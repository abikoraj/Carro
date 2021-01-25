<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            if( !Auth::attempt(['email' => $request->email, 'password' => $request->password],true)){
                return redirect()->back()->with('message','username password wrong');
            }else{
                return redirect()->route('dashboard');
            }
        } else {
            return view('login');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
