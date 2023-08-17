<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('test', function () {
    return view('test');
});
//http://127.0.0.1:8000/hello?name=khoa
Route::get('hello',function (Request $request){
    return "HELLO ". $request->get('name');
});

// http://127.0.0.1:8000/user/detail/13
// http://127.0.0.1:8000/user/detail/13/khoa
Route::get('user/detail/{id}/{name?}',function($id,$name = null){
    return "User detail: ".$id. $name;
});
