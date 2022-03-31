<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal']);

Route::get('/sobrenos', [\App\Http\Controllers\SobreNosController::class,'sobrenos']);

Route::get('/contato', [\App\Http\Controllers\ContatoController::class,'contato']);

Route::get('/clientes', [\App\Http\Controllers\ClientesController::class,'clientes']);

Route::get('/clientes', [\App\Http\Controllers\ClientesController::class,'clientes']);

// define quantos parâmetros forem necessários para a rota
Route::get('/contato/{nome}/{categoria_id}', function (string $nome, int $categoria_id=1){
    echo 'estamos aqui '.$nome .' categoria '. $categoria_id;
})
->where('categoria_id', '[0-9]+')
->where('nome', '[A-Za-z]+'); 
// tratando a rota com expressões regulares para que não gere mais o erro de tipo de variável, mas sim o erro de rota não encontrada


