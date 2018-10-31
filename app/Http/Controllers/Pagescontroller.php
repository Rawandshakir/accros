<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class Pagescontroller extends Controller
{

    Public function home (User $user){
        return view('pages.home' ,compact('user'));
    }

    Public function library (){
        return view('pages.library');
    }

    Public function news (){
        return view('pages.news');
    }

    Public function login (){
        return view('pages.login');
    }

    Public function forgetPass ()
    {
        return view('UsersPages.password');
    }
}




