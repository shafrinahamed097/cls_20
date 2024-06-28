<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articleController extends Controller
{
    function index($articleId){
        return 'Article ID = '.$articleId ;
    }

    // function showArticles($pageNumber){
    //     return 'Page Number: ' .$pageNumber;
    // }

    function showArticles($pageNumber, $type){
        return 'Page Number: ' .$pageNumber."type: ".$type;
    }
}





