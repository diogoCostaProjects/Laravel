<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2) {  // recebendo parametros nos controller

        // $data = ['x'=>$p1, 'y'=>$p2];
        
        // return view('site.teste', $data); // array associativo 

        // return view('site.teste', compact('p1', 'p2')); // método compact do php
        
        return view('site.teste')->with('p1', $p1)->with('p2', $p2); // método with do laravel
    }
}
