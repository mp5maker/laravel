<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class ArticleController extends Controller{
    public function index(){
        return view('article');
    }

    public function new(){
        return view('articlenew');
    }
}