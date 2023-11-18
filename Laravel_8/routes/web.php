<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use  App\Http\Controllers\logincontroller;
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
return view('index')->with('head',$head)->with('head1',$head1);
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


 // route parameters
 Route::get('number/{id?}',function($id=null){
if($id==1){
    return view('user');
}else if($id==2){
    return view('index1');
} else if($id==null){
    return view('index1');

}

 });
// Route Groups
Route::prefix('/gallery')->group(function(){
Route::get('/videos',function(){
    return '<h1> hello videos</h1>';
});

Route::get('/photos',function(){
    return '<h1> hello photos</h1>';
});
});


//middleware
Route::get('/months/{id}',function($id){
if($id==1){
    return " january";
}else if($id==2){
    return "february";
}
})->middleware(['zero','monthnum']);

// user controllers
Route::get('/login',[logincontroller::class,'login']);
Route::get('/show/{id}',[logincontroller::class,'show']);
