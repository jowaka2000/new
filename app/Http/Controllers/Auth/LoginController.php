<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login.test-index');
    }

    public function store(ValidateLoginRequest $request){

        if(!Auth::attempt($request->only('email','password'),$request->remember)){
            return back()->with('login_message_error','Failed! Check the login details again');
        }

        return to_route('home')->with('welcome_message','Welcome '.auth()->user()->name);
    }

    public function resetPassword(){
        return view('auth.login.reset-password');
    }

    public function logout(){
        auth()->logout();

        return back();
    }
}
