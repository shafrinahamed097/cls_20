<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello', function(){
//     return "Hello World";

// });

Route::get("/hello", [WelcomeController::class, 'sayhello']);

Route::get('/hello/from/ostad', function(){
    return "Hello From Ostad new Route";

});

Route::get('/course', [WelcomeController::class, 'courseName']);
