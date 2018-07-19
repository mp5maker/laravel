<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function (){
    return View::make('simple');
});

Route::get('/home', function(){
    return "Home Page!";
});

$logic = function(){
    return "Contact Us";
};

Route::get('/contact', $logic);

Route::get('/information/{department}', function($department){
    return "{$department}";
});

Route::get("/partners/{name?}", function($name = null){
    if($name == null){
        return "Sorry, we couldn't find any partners";
    }else{  
        return "{$name}";
    }
});

