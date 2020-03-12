<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/contact',function(){
//     $names=["Jihan","Jeeth","Jafeer"];
//     return view("contact",["contacts"=>$names]);
// });

Route::get('/contact','HomeController@list');

Route::get('/home',function(){
    return view("home.home");               
});
// we can use . or / to write the folder heirachy
Route::get('/about',function(){
    return view("about",["title"=>"Page"]);
});

Route::get('/about',function(){
    return view("about",["title"=>"Page"]);
});

Route::get('/',function(){
    return view("layouts.index");
});
Route::resource('student','StudentController');
