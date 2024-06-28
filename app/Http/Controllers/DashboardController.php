<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard(){
        // return "Dashboard Page";
        return view('dashboard');
    }
}
