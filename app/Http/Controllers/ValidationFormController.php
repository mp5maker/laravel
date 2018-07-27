<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory as View;

class ValidationFormController extends Controller
{
    protected $view;

    public function __construct(View $view){
        $this->view  = $view;
    }

    public function index(View $view){
        return $this->view->make('validationform');
    }
}
