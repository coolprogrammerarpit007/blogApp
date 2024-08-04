<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
    return view('home');
});

// Route::get('/about/{name}',function($name){
//     // echo $name;
//     return view('about',['name' => $name]);
// });

Route::get('/about/{name}',[UserController::class,'getName']);