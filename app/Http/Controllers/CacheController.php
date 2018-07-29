<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Cache\Repository;

class CacheController extends Controller
{
    public function index(Repository $cache){
        //Cache an item for 5 minutes
        $cache->put('expensive',  'Caching for 5 minutes', 5);

        //Cache an item with a defined expiry
        $cache->put('cheap', 'Caching with an defined expiry', now());

        //Cache Boolean determines value has been added or not
        $cache_added = $cache->add('moderate', 'Cache with boolean', 5);
        
        //Cache an item forever
        $cache->forever('forever', 'Forever Cache');
        
        //Cache remember forever
        $cache->forever('rememberforever', 'Remember forever cache');

        //Caching a closure
        $cache->put('closure', function(){
            echo "I said hello";
        });

        
        //Checking Cache
        if($cache->has('closure')):
            $cache_exist = 'Closure Exists';
        else:
            $cache_exist = 'Closure cache do not exist';
        endif;
        
        //Forget the cache
        $cache->forget('closure');
        
        //Flush tagged
        // $cache->tags(['cheeses'])->flush();

        //Caching a numeric value
        $cache->put('numeric', 5, 15);
        $increment = $cache->increment('numeric');
        $decrement = $cache->decrement('numeric');

        //Getting the value of cache
        $array = [
            $cache->get('expensive'),
            $cache->get('moderate'),
            //Retrive & Forget
            $cache->pull('cheap'),
            $cache->get('cheap'),
            $cache->get('forever'),
            $cache_exist,
            $cache_added,
            $increment,
            $decrement
        ];
        
        //Printing out all the cache saved data
        echo "<pre>";
        var_dump($array);
    }
}
