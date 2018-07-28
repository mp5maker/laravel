<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BindingController extends Controller
{
    protected $testing;

    public function __construct(){
        $this->testing =  "Testing the binding service";
    }

    public function __toString(){
        return $this->testing;
    }
}
