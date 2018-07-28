<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory as View;

class ErrorController extends Controller
{
    public function index(View $view){
        return $view->make('error404');
    }
}
