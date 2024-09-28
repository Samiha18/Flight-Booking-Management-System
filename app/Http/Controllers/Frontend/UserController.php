<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function registration(){
        return view('frontend.pages.registration');
    }

    public function store(Request $request){
        $validate=Validator:: make($request->all(),[
            'name'=>'required',
            'email'=>'required|email|unique:user',
            'password'=>'required|min:6',

        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>'user',
            'password'=> bcrypt($request->password),
        ]);

notify()->success('Passenger Registration Successful. Please Login');
return redirect()->route('user.login');

    
    }

    public function login(){
        return view('Frontend.pages.login');
        
    }
    public function dologin(Request $request){
        $validator=Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required',

        ]);
        if ($validator->fails()){
            notify()->error($validator->errors()->first());
            return redirect()->back()->withInput();
        
        }
        $credentials=$request->only('email','password');
        if (auth()->attempt($credentials)){
            notify()->success('login Success,');
            return redirect()->route('home');
        }
        notify()->error('Invalid Credentials,');
        return redirect()->back();
    }

    public function logout(){
        auth()->logout();
        notify()->success('logout success');
        return redirect()->route('home');
    }
}
