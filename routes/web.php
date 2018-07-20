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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function (){
    //     return View::make('simple');
// });

Route::get("/category/{some_data?}", function($some_data = null){
    if($some_data == null){
        return View::make('simple');
    }else{
        $data['some_data'] = $some_data;
        return View::make('simple', $data);
    }
});

Route::get("/outsource", function(){
    return Redirect::to('/');
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

Route::get('/custom/response', function(){
    return Response::make('Hello World', 200);
});

Route::get('/custom/response2', function(){
    $response  = Response::make('Hello World', 200);
    $response->headers->set('Content-Type', 'text/html');
    return $response;
});

Route::get('/get/json', function(){
    $data = ['batman', 'spiderman', 'superman'];
    return Response::json($data);
});

Route::get('/file/download', function(){
    $file = $_SERVER['DOCUMENT_ROOT']."/laravel/resources/img/vscode_shortcuts.pdf";
    return Response::download($file);
}); 

Route::get('/file/download2', function(){
    $file = $_SERVER['DOCUMENT_ROOT']."/laravel/resources/img/vscode_shortcuts.pdf";
    return Response::download($file, 'vscode.pdf', ['iron', 'man']);
});

Route::get('blade/index', function(){
    $countries = ['japan', 'germany', 'unitedstates', 'canada'];
    $data =  ["header" => "Blade Index", "heading" => "Welcome to the blade index page", "control" => "no", "countries" => $countries];
    return View::make('index', $data);
});

Route::get('blade/template', function(){
    return View::make('main');
});

Route::get('blade/inheritance', function(){
    return View::make('child');
});