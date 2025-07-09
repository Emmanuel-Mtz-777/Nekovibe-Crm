<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function showLogin(){
        return view('auth.login');
    }

    public function login(LoginRequest $request){
        $credentials =$request->validated();

        if(Auth::attempt($credentials)){
            $user=Auth::user();

            if($user->role_id ==1){
                Auth::logout();
                return back()->withErrors(['email'=>'No tiene permisos para esta accion']);
            }
            return redirect()->intended('/');
        }
        return back()->withErrors(['email'=>'Credenciales invalidas']);
    }
}
