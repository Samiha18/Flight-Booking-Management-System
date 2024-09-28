<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
  public function loginForm()
  {
    return view('admin.pages.login');
  }
  public function loginpost(Request $request)
  {

    $val = Validator::make(
      $request->all(),
      [
        'email' => 'required|email',
        'password' => 'required|min:6'
      ]
    );

    if ($val->fails()) {
      //message
      return redirect()->back()->withErrors($val);
    }
    notify()->success('user created successfully');

    $credentials = $request->except('_token');
    // $credentials=$request->only('email','password');

    $login = auth()->attempt($credentials);

    if ($login) {
      return redirect()->route('dashboard.list');
    }
    return redirect()->back()->witherrors(['invalid user email or password']);
  }

  public function logout()
  {
    auth()->logout();
    return redirect()->route('admin.login');
  }




// 
  public function list()
  {
    $users = User::paginate(5);
    return view('admin.pages.user.list', compact('users'));
  }

  public function edit($id)
  {
    $users = User::find($id);
    // dd($id);
    return view('admin.pages.user.edit', compact('users'));
  }
  public function userUpdate(Request $request, $id)
  {
      $request->validate([
          'name' => 'required',
      ]);

      // old data
      $user = User::find($id);

      $user->update([
          'name' => $request->name,
          'email' => $request->email,
         
          'role'=>$request->role,


          
      ]);
      notify()->success('User updated successfully');
      return to_route('user.list');
  }


  //delete-------------
  public function delete($id)
  {
    $users = User::find($id);
    if ($users) {
      $users->delete();
    }
    notify()->success('Users deleted successfully.');
    return redirect()->back();
  }



  public function form()
  {
    return view('admin.pages.user.form');
  }

  public function store(Request $request)
  {
    // dd($request->all());


    /*  $validate=Validator::make($request->all(),[
 'name'=>'required',
  'role'=>'required',
  'email'=>'required|email',
  'user_password'=>'required|min 6',
  ]);

 if($validate->fails())
  {
   return redirect()->back()->with('myerror',$validate->getMessageBag());
  } */

    //  dd($request->all());

    User::create([
      'name' => $request->name,
      'role' => $request->role,
      'email' => $request->email_address,
      'password' => $request->password,


    ]);
    return redirect()->route('user.list')->with('message', 'user created successfully');
  }


      // public function view(){
        
      //   $user = User::all();
      //   return redirect()->route('user.list',compact('user'));
        
      // }







}
