<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory as View;

class MiddlewareTestController extends Controller
{
    public function index(View $view){
        return $view->make('middlewaretest');
    }
}
