<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getName($name){
        $data = compact('name');
        return view('about')->with($data);
    }
}
