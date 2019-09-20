<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Redirect;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        if($request->isMethod('POST')){
            $data = $request->all();
            $this->validate($request,[
                'email' => 'required|min:4',
                'password' => 'required|min:6'
            ]);
            
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
                 return redirect()->intended(route('index'));
            }
            else{
                $errors = new MessageBag(['Email' => ['Email or password incorrect!']]);
                return Redirect::back()->withErrors($errors)->withInput($request->only('Email','remember'));
            }
        }
        return view('/login');
    }

    public function register(Request $request){
        if($request->isMethod('POST')){
            $this->validate($request,
            [
                'name'=>'required',
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6',
                'password_confirmation'=>'required|same:password'
            ]);
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect('/login');
        }
        return view('/register');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
