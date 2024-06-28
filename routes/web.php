<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\articleController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello', function(){
//     return "Hello World";

// });


Route::get('/hello/from/ostad', function(){
    return "Hello From Ostad new Route";

});


Route::get("/hello", [WelcomeController::class, 'sayhello']);
Route::get('/course', [WelcomeController::class, 'courseName']);
Route::get('/dashboard',[DashboardController::class, 'dashboard']);

// Generate Dynamic Route

Route::get("/article/{articleId}",[articleController::class,'index']);
// Route::get("/article/page/{pageNumber}",[articleController::class,'showArticles']);
Route::get("/article/page/{pageNumber}/display/{type}",[articleController::class,'showArticles']);



