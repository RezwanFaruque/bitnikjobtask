<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    

    // admin dashboard after login
    public function index(){
        return view('admin.dashboard');
    }
}
