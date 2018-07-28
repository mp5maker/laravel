<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InjectFromController extends Controller
{
    public function read(InjectToController $injection){
        echo $injection->message();
    }
}
