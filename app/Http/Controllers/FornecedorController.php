<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){

        $fornecedores = [
            'Diogo',
            'Diogo',
            'Diogo',
            'Diogo',
            'Diogo',
            'Diogo',
            'Diogo',
            'Diogo',
            'Diogo',
            'Diogo',
            'Diogo',
            'Diogo',
            'Diogo'
        ];
        $data = ['fornecedores'=> $fornecedores];

        return view('app.fornecedor.index', $data);
    }
}
