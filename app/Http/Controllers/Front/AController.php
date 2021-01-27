<?php

namespace App\Http\Controllers\Front;
use Illuminate\Http\Request;
use App\Http\Controllers\controller;

class UserController extends Controller
{
    //
    public function showMyName()
    {
        $data=['name'=>'Hussein','age'=>27]; 
        return view('welcome',$data);
    }
}
