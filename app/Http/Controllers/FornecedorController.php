<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){

        $fornecedores = [
            0 => ['nome' => 'diogo', 'status'=>'N']
        ];
        $data = ['fornecedores'=> $fornecedores];

        return view('app.fornecedor.index', $data);
    }
}
