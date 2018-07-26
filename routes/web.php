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

Route::group(['prefix' => "article"], function(){
    Route::get('/', 'ArticleController@index');
    Route::get('/new', 'ArticleController@new');
});

Route::resource('/testing', 'TestingController');

// Route::get('/current/url', function(){
//     return URL::current();
// });

Route::get('/current/url', function(){
    return URL::full();
});

Route::get('/urlredirect', function(){
    return Redirect::to('/showurl');
});

Route::get("/showurl", function(){
    return URL::previous();
});

// Route::get('/urlto', function(){
//     return URL::to('/anotherdimension');
// });

// Route::get('/urlto', function(){
//     return URL::to('/anotherdimension', ['ok', 'no']);
// });

Route::get('/urlto', function(){
    return URL::to('/anotherdimension', ['ok', 'no'], true);
});


Route::get('/strangeroute', function(){
    return URL::secure('/secureroute', ['ok', 'secret']);
});

// Route::get('/superhero/shortcut', [
//     'as' => 'superhero',
//     function(){
//         return "It is the superhero shortcut";
//     }
// ]);

// Route::get('/redirectsuperhero', function(){
    //     return URL::route('superhero');
    // });

Route::get('/hail/{first}/the/{second}', [
    'as' => 'superhero',
    function($first, $second){
        return "It is the $first the $second";
    }
]);

Route::get('/damnson', function(){
    return URL::route('superhero', ['damn', 'son']);
});

Route::get('/triggercontroller', function(){
    return URL::action('FirstController@show');
});

// Route::get('/asset', function(){
//     return URL::asset('/img/book.png');
// });

// Route::get('/asset', function(){
//     return URL::asset('/img/book.png', true);
// });

Route::get('/asset', function(){
    return URL::secureAsset('/img/book.png', true);
});

Route::get('/gamemodel', function(){
    $game = new \App\Game;
    $game->name = 'Assasins Creed';
    $game->description = 'Assassins Vs Templars.';
    $game->save();
});

Route::get('/readdata', function(){
    $game = \App\Game::find('1');
    return $game->name;
});

// Route::get('/readdata', function(){
//     $game = new \App\Game;
//     echo '<pre>';
//     var_dump($game);
// });

Route::get('/updatedata', function(){
    $game = \App\Game::find(2);
    $game->name = "Alladin";
    $game->description = "Too lazy to work";
    $game->save();
});

Route::get('/deletedata', function(){
    $game = \App\Game::find(2);
    $game->delete();
});

Route::get('/destroydata', function(){
    $game = new \App\Game;
    $game->destroy([3,4,5]);
});

Route::get('/albumseeds', function(){
    $album = new \App\Album;
    $album->title =  'Some Made Hope';
    $album->artist = 'Matt Nathanson';
    $album->genre = 'Acoustic Rock';
    $album->year = 2007;
    $album->save();
    
    $album = new \App\Album;
    $album->title =  'Please';
    $album->artist = 'Matt Nathanson';
    $album->genre = 'Acoustic Rock';
    $album->year = 1993;
    $album->save();
    
    $album = new \App\Album;
    $album->title =  'Leaving through the window';
    $album->artist = 'Something Corporate';
    $album->genre = 'Piano Rock';
    $album->year = 2002;
    $album->save();
    
    $album = new \App\Album;
    $album->title =  'North';
    $album->artist = 'Something Corporate';
    $album->genre = 'Piano Rock';
    $album->year = 2002;
    $album->save();
    
    $album = new \App\Album;
    $album->title =  '...Anywhere But Here';
    $album->artist = 'The Ataris';
    $album->genre = 'Punk Rock';
    $album->year = 1997;
    $album->save();
    
    $album = new \App\Album;
    $album->title =  '...Is a Real Boy';
    $album->artist = 'Say Anything';
    $album->genre = 'Indie Rock';
    $album->year = 2006;
    $album->save();
});

// Route::get('/readalbum', function(){
//     $album = \App\Album::find(1);
//     return $album->title;
// });

// Route::get('/readalbum', function(){
//     $album = \App\Album::find(1);
//     return $album;
// });

// Route::get('/readalbum', function(){
//     $albums = \App\Album::all();
//     foreach($albums as $album):
//         echo $album->title."<br/>";
//     endforeach;
// });

// Route::get('/readalbum', function(){
//     $albums = \App\Album::find([1,3]);
//     return $albums;
// });

// Route::get('/readalbum', function(){
//     $albums = \App\Album::first();
//     return $albums;
// });

Route::get('/updatealbum', function(){
    \App\Album::where('artist', '=', 'Matt Nathanson')
                ->update(['artist' => 'Photon Khan']);
    return \App\Album::all();
});

Route::get('/deletealbum', function(){
    \App\Album::where('title', '=', 'North')
                ->delete();
    return \App\Album::all();
});

// Route::get('/readalbum', function(){
//     return \App\Album::where('title', '=', 'Please')
//             ->get();
// });

// Route::get('/readalbum', function(){
//     return \App\Album::where('title', '=', 'Please')
//             ->get(['id', 'title', 'artist']);
// });

Route::get('/readalbum', function(){
    return \App\Album::pluck('artist');
});

Route::get('/readquery', function(){
    return \App\Album::where('artist', '=', 'Something Corportate')
        ->toSql();
});

// Route::get('/queryconstraints', function(){
//     return \App\Album::where('artist', '=', 'Photon Khan')->get();
// });

Route::get('/queryconstraints', function(){
    return \App\Album::where('artist', '=', 'Photon Khan')->first();
});

Route::get('/likesearch', function(){
    return \App\Album::where('title', 'LIKE', '...%')->get();
});

Route::get('/multiplewhere', function(){
    return \App\Album::where('artist', '=', 'Photon Khan')
                      ->where('genre', '=', 'Acoustic Rock')
                      ->get();
});

Route::get('/orwhere', function(){
    return \App\Album::where('artist', '=', 'Photon Khan')
            ->orWhere('artist', '=', 'the Ataris')->get();
});

Route::get('/orwhere', function(){
    return \App\Album::where('artist', '=', 'Photon Khan')
            ->orWhere('artist', '=', 'the Ataris')->get();
});

Route::get('/whereraw', function(){
    return \App\Album::whereRaw('artist = ? AND title LIKE ?', ['Say Anything', '...%'])->get();
});

Route::get('/wherebetween', function(){
    return \App\Album::whereBetween('year', ['2000', '2010'])->get();
});

Route::get('/nestedwhere', function(){
    return \App\Album::whereNested(function($query){
        $query->where('year', '>', 2000);
        $query->where('year', '<', 2035);
    })->get();
});

Route::get('/wherein', function(){
    $values = ['Photon Khan', 'The Ataris'];
    return \App\Album::whereIn('artist', $values)->get();
});

Route::get('/wherenotin', function(){
    $values = ['Photon Khan', 'The Ataris'];
    return \App\Album::whereNotIn('artist', $values)->get();
});

Route::get('/wherenull', function(){
    return \App\Album::whereNull('artist')->get();
});

Route::get('/wherenotnull', function(){
    return \App\Album::whereNotNull('artist')->get();
});

Route::get('/orderby', function(){
    return \App\Album::where('artist', '=', 'Photon Khan')->orderby('year')->get();
});

Route::get('/limitorderby', function(){
    return \App\Album::where('artist', '=', 'Photon Khan')->orderby('year')->take(1)->get();
});

Route::get('/limitskip', function(){
    return \App\Album::where('artist', '=', 'Photon Khan')->orderby('year')->take(2)->skip(1)->get();
});

Route::get('/magicquery', function(){
    return \App\Album::whereArtist('Photon Khan')->get();
});

Route::get('/scopequery', function(){
    return \App\Album::triplePeriod()->get();
});

Route::get('/collection', function(){
    return \App\Album::all();
});

Route::get('/firstcollection', function(){
    $data = \App\Album::all();
    return $data->first();
});

Route::get('/lastcollection', function(){
    $data = \App\Album::all();
    return $data->last();
});

Route::get('/shiftcollection', function(){
    $data = \App\Album::all();
    return $data->shift();
});

Route::get('/popcollection', function(){
    $data = \App\Album::all();
    return $data->pop();
});

Route::get('/eachcollection', function(){
    $data = \App\Album::all();
    $data->each(function($each_item){
        echo $each_item->title."<br/>";
    });
});

Route::get('mapcollection', function(){
    $data = \App\Album::all();
    $data = $data->map(function($each_data){
                return "Great Albums ::".$each_data->title;
            });
    echo "<pre>";
    var_dump($data);
});

Route::get('filtercollection', function(){
    $data = \App\Album::all();
    $data = $data->filter(function($each_data){
                    if($each_data->artist == 'Something Corporate'):
                        return true;
                    endif;
                });
    echo "<pre>";
    var_dump($data);
});

Route::get('sortcollection', function(){
    $collection = \App\Album::all();
    $collection = $collection->sort(function($a, $b){
        $a = $a->year;
        $b = $b->year;
        if($a == $b):
            return 0;
        else:
            return ($a > $b)? 1 : -1;
        endif;
    });
    echo "<pre>";
    $collection->each(function($album){
        var_dump($album->year);
    });
});

Route::get('/reversecollection', function(){
    $collection = \App\Album::all();
    echo "<pre>";
    echo "Normal Loop <br/>";
    $collection->each(function($each_data){
        echo $each_data->title."<br/>";
    });
    echo "<br/><br/>";
    echo "Reverse Loop <br/>";
    $reverse = $collection->reverse();
    $reverse->each(function($each_data){
        echo $each_data->title."<br/>";
    });
});

Route::get('/slicecollection', function(){
    $collection = \App\Album::all();
    $sliced_data = $collection->slice(2,4);
    $sliced_data->each(function($each_data){
        echo $each_data->title."</br/>";
    });
});

Route::get('/mergecollection', function(){
    $artist = \App\Album::whereArtist('Photon Khan')->get();
    $title = \App\Album::whereTitle('Leaving through the window')->get();
    $merged = $artist->merge($title);
    $merged->each(function($each_data){
        echo "Artist:: {$each_data->artist}   Title:: {$each_data->title}<br/>";
    });
});

Route::get('/isemptycollection', function(){
    $data = \App\Album::whereArtist('Boom')->get();
    if($data->isEmpty()):
        echo "Life is so empty";
    endif;
});

Route::get('/toarraycollection', function(){
    $data = \App\Album::all();
    echo "<pre>";
    var_dump($data->toArray());
});

Route::get('/tojsoncollection', function(){
    $data = \App\Album::all();
    echo "<pre>";
    var_dump($data->toJson());
});

Route::get('/tojsoncollection', function(){
    $data = \App\Album::all();
    echo "<pre>";
    var_dump($data->toJson());
});

Route::get('/countcollection', function(){
    $data = \App\Album::all();
    echo "<pre>";
    echo $data->count();
});

Route::get('relationships', function(){
    $author = new \App\Author;
    $author->name = 'J.K Rowling';
    $author->save();

    $book = new \App\Book;
    $book->name = "Harry Potter and the Sorcerer's Stone";
    $book->author()->associate($author);
    $book->save();

    return "Successfully Added the Relationship";
});

Route::get('longrelation', function(){
    $author = new \App\Author;
    $author->name = "Dan Brown";
    $author->save();

    $book = new \App\Book;
    $book->name = "Da Vinci Code";
    $book->author()->associate($author);
    $book->save();

    $reader = new \App\Reader;
    $reader->name = 'Photon Khan';
    $reader->save();
    $reader->books()->save($book);

    return "Long Relation Addded";
});