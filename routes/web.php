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

// Route::group(["domain" => "admin.localhost"], function(){
//     Route::get('/my/route', function(){
//         return "Sub Domain Page";
//     });
// });

// Route::group(["domain" => "{user}.admin.localhost:8000"], function(){
//     Route::get('profile/{page}', function($user, $page){
//         return "{$user} {$page}";
//     });
// });

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

Route::get('/simpleform', function(){
    return View::make('form');
});

// Route::get('/dumpdata', function(){
//     $data = Request::all();
//     echo "<pre>";
//     var_dump($data);
// });

// Route::get('/dumpdata', function(){
//     $data = Request::get('foo', 'war');
//     echo "<pre>";
//     var_dump($data);
// });

// Route::get("/dumpdata", function(){
//     $data = Request::has('foo');
//     var_dump($data);
// });

// Route::get("/dumpdata", function(){
//     $data = Request::only('foo');
//     var_dump($data);
// });

// Route::get('/dumpdata', function(){
//     $data = Request::except('baz');
//     var_dump($data);
// });

// Route::get('/dumpdata', function(){
//     return Redirect::to('/new/request');
// });

// Route::get('/new/request', function(){
//     $data = Request::all();
//     echo "<pre>";
//     var_dump($data);
// });

// Route::get('/dumpdata', function(){
//     Request::flash();
//     return Redirect::to('/new/request');
// });

// Route::get('/dumpdata', function(){
//     Request::flashOnly('foo');
//     return Redirect::to('/new/request');
// });

// Route::get('/dumpdata', function(){
//     Request::flashExcept('foo');
//     return Redirect::to('/new/request');
// });

// Route::get('/dumpdata', function(){
//     return Redirect::to('/new/request')->withInput();
// });

// Route::get('/dumpdata', function(){
//     return Redirect::to('/new/request')->withInput(Request::only('foo'));
// });

Route::get('/dumpdata', function(){
    return Redirect::to('/new/request')->withInput(Request::except('foo'));
});

Route::get('/new/request', function(){
    $data = Request::old();
    echo "<pre>";
    var_dump($data);
});

Route::get('/postform', function(){
    return View::make('postform');
});

Route::post('/dumppostdata', function(){
    $data = Request::all();
    echo "<pre>";
    var_dump($data);
});

Route::get('/fileupload', function(){
    return View::make('fileupload');
});

// Route::post('/filepost', function(){
//     echo "<pre>";
//     var_dump(Request::file('upload')->getClientOriginalName()); 
// });

// Route::post('/filepost', function(){
//     echo "<pre>";
//     var_dump(Request::file('upload')->getFileName()); 
// });

// Route::post('/filepost', function(){
//     echo "<pre>";
//     var_dump(Request::file('upload')->getClientSize()); 
// });

// Route::post('/filepost', function(){
//     echo "<pre>";
//     var_dump(Request::file('upload')->getClientSize()); 
// });

// Route::post('/filepost', function(){
//     echo "<pre>";
//     var_dump(Request::file('upload')->getMimeType()); 
// });

// Route::post('/filepost', function(){
//     echo "<pre>";
//     var_dump(Request::file('upload')->guessExtension()); 
// });

// Route::post('/filepost', function(){
//     echo "<pre>";
//     var_dump(Request::file('upload')->getRealPath()); 
// });

Route::post('/filepost', function(){
    $name = Request::file('upload')->getClientOriginalName();
    Request::file('upload')->move($_SERVER['DOCUMENT_ROOT'].'/laravel/storage/directory/', $name);
    return "File was moved";
});


// Route::get('/createcookie', function(){
//     $cookie = Cookie::make('username', 'khan.photon', 30);
//     return Response::make('/readcookie')->withCookie($cookie);
// });

// Route::get('/createcookie', function(){
//     $cookie = Cookie::forever('username', 'khan.photon');
//     return Response::make('/readcookie')->withCookie($cookie);
// });

Route::get('/createcookie', function(){
    $cookie = Cookie::forget('username');
    return $cookie;
});

// Route::get('/readcookie', function(){
//     $cookie = Cookie::get('username');
//     var_dump($cookie);
// });

// Route::get('/readcookie', function(){
//     $cookie = Cookie::has('username');
//     var_dump($cookie);
// });

Route::get('/readcookie', function(){
    $cookie = Cookie::get('username');
    var_dump($cookie);
});

// Route::get('/i/like/shortcuts', ["as" => "shortcuts", 
//     function(){
//         return View::make('shortcuts');
//     }
// ]);

// Route::get('/i/like/shortcuts', ["as" => "shortcuts", 
//     function(){
//         return Route::currentRouteName();
//     }
// ]);

// Route::get('/redirectshortcuts', function(){
//     return Redirect::route('shortcuts');
// });

Route::get('/first/shortcuts', [
    "as" => "shortcuts",
    "uses" => "FirstController@show"
]);

Route::get('/redirectshortcuts', function(){
    return Redirect::route('shortcuts');
});

Route::get('/save/{name}', function($name){
    return "My name is : {$name}";
})->where('name', '[A-Za-z]+');

Route::get('/save/{firstname}/{lastname}', function($firstname, $lastname){
    return "My name is : {$firstname} {$lastname}";
})->where('firstname', '[A-Za-z]+')->where('lastname', '[A-Za-z]+');

// Route::group([], function(){
//     Route::get('/critical', function(){
//         return "Critical";
//     });

//     Route::get('/medical', function(){
//         return "Medical";
//     });
    
//     Route::get('/condition', function(){
//         return "Condition";
//     });
// });

Route::group(["prefix" => "books"], function(){
    Route::get('/critical', function(){
        return "Critical";
    });

    Route::get('/medical', function(){
        return "Medical";
    });

    Route::get('/condition', function(){
        return "Condition";
    });
});


