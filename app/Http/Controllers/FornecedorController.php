<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){

        $fornecedores = [
            0 => [
                'nome' => 'diogo', 
                'status'=>'N', 
                'cnpj'=>'1111111'
            ],
            1 => [
                'nome' => 'barbara', 
                'status'=>'s'                
            ]
        ];
        $data = ['fornecedores'=> $fornecedores];

        

        return view('app.fornecedor.index', $data);
    }
}
