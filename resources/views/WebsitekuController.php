<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsitekuController extends Controller
{
    public function customize(){
        return view('Customize');
    }
    public function content(){
        return view('content');
    }
    public function info_package(){
        return view('info_package');
    }
    public function login(){
        return view('Login');
    }
    public function package(){
        return view('package');
    }
    public function payment(){
        return view('Payment');
    }
    public function profil(){
        return view('profile');
    }
    public function register(){
        return view('Register');
    }
}
