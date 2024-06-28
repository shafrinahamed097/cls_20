<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articleController extends Controller
{
    function index($articleId){
        return 'Article ID = '.$articleId ;
    }
}


