<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\users;
class userscontroller extends Controller
{
    public function create(){
        return view('userinfo');
    }

    public function store(Request $request){
        $username=$request->input('name');
        $email=$request->input('email');
        $phonenumber=$request->input('phonenumber');
 $users= new users;
 $users->username=$username;
 $users->phonenumber=$phonenumber;
 $users->email=$email;
 $users->save();


  return view('userinfo')->with('msg','successfully');
    }
}
