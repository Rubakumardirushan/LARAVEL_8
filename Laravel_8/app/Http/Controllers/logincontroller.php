<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function login(){
        return '<h1> hello controller</h1>';
    }

    public function show(Request $request,$id){
        $user=$request->input('user');
    if($id==1){
        return 'january'.$user;
    }
    else if($id==2){
        return 'february'.$user;
    }
    }
}
