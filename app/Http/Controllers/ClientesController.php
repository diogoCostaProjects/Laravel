<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    //
    public function clientes() {
        $clientes = array("Diogo", "Bárbara", "Viuma", "Shuri");

        echo '<pre>';
        print_r($clientes);
    }
    
    
}
