<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard(){
        // return "Dashboard Page";
         // return view('dashboard.sidebar.sidebar');

         $name = "John Doe";
         $email = "john@email.com";
         
        return view('dashboard.home',['name'=> $name, 'email'=> $email]);
       
    }

}
