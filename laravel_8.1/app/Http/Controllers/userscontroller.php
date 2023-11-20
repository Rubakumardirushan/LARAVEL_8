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
      //  $username=$request->input('name');
      //  $email=$request->input('email');
     //   $phonenumber=$request->input('phonenumber');

     $data = $request->only(['name', 'email', 'phonenumber']);

     // Assuming your model is named User
     $user = User::create($data);
 //$users= new users;
// $users->username=$username;
// $users->phonenumber=$phonenumber;
// $users->email=$email;
 //$users->save();


  return redirect('/display');
    }

public function display(){
    $displays= users::all();
    return view('display',['displays'=>$displays]);
}
public function edit($id){

    $info=users::find($id);
    return view('edit-table',['info'=>$info]);
}
public function updates(Request $request ,$id){
    $user=users::find($id);
    $user->username=$request->input('name');
    $user->phonenumber=$request->input('phonenumber');
    $user->email=$request->input('email');
    $user->save();
    return redirect('/display');


}
public function delete($id){
    $user=users::find($id);
    $user->delete();
    return redirect('/display');
}
}
