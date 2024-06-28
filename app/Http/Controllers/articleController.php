<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articleController extends Controller
{
    function index($articleId=1){
        return 'Article ID = '.$articleId ;
    }

    // function showArticles($pageNumber){
    //     return 'Page Number: ' .$pageNumber;
    // }

    // function showArticles($pageNumber, $type){
    //     return 'Page Number: ' .$pageNumber."type: ".$type;
    // }
  
    function showArticles($pageNumber){
      $perPage = request()->input('perPage',10);
      $sort = request()->input('sort', 'arc');

      return 'Page Number = '.$pageNumber.'Per Page = '.$perPage.', sort = '.$sort; 

    }

    // function showArticles($pageNumber, Request $request){
    //     $perPage = $request->input('perPage',10);
    //     $sort = $request->input('sort', 'arc');
  
    //     return 'Page Number = '.$pageNumber.'Per Page = '.$perPage.', sort = '.$sort; 
  
    //   }

}





