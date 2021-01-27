<?php

namespace App\Http\Controllers\Front;
use Illuminate\Http\Request;
use App\Http\Controllers\controller;

class UserController extends Controller
{
    //
     public function __construct()
    {

        $this->middleware(middleware:'auth')->except('showMyName0');
    }
    public function showMyName0()
    {
        return 'Hussein Jdeed0';
    }
    public function showMyName1()
    {
        return 'Hussein Jdeed1';
    }
    public function showMyName2()
    {
        return 'Hussein Jdeed2';
    }
    public function showMyName3()
    {
        return 'Hussein Jdeed3';
    }
}
