<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InjectToController extends Controller
{
    public function message(){
        return "I am going to inject in your system";
    }
}
