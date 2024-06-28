<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function sayHello(){
        return "Hello World 132";
    }

    function courseName(){
        return "Larevel 11";
    }
}
