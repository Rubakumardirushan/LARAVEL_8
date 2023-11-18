<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
return " hello dirushan";
});

Route::get('/', function () {
    // how to pass data view use [];
    $head=" hello heading";
    $head1=" hello heading2";
return view('index',compact('head','head1'));
});

Route::get('/contact',function(){
return view('index1');
});

 Route::get('/userinfo',function(){
return view('user');
 });
 Route::Post('/save',function(Request $request){
    $username=$request->input('username');
return redirect('/')->with('msg',$username);
 });
