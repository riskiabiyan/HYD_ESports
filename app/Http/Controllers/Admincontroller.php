<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin(){
        return view('admin');
    }

    public function settings(){
        return view('/admin_page/settings');
    }

    public function dashboard(){
        return view('/admin_page/dashboard');
    }
}
