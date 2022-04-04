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

Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');

Route::get('/sobrenos', [\App\Http\Controllers\SobreNosController::class,'sobrenos'])->name('site.sobrenos');

Route::get('/contato', [\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');

Route::get('/login', function(){ return 'login'; });

// prefixo para encapsular rotas
Route::prefix('/app')->group(function() {
       
    Route::get('/clientes', function(){return 'clientes'; })->name('app.clientes');
    
    Route::get('/fornecedores', function(){ return 'fornecedores';})->name('app.fornecedores');
    
    Route::get('/produtos', function(){ return 'produtos'; })->name('app.produtos');
});

Route::get('/rota1', function(){ 
    echo 'rota1'; 
})->name('site.rota1');

Route::get('/rota2', function(){ 
    return redirect()->route('site.rota1');
})->name('site.rota2');


// rota de contingência, caso erre a rota monta uma padrão
Route::fallback(function(){
    echo 'a rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ira para a página inicial.' ;
});

// Route::redirect('/rota2', 'rota1');

// define quantos parâmetros forem necessários para a rota
// Route::get('/contato/{nome}/{categoria_id}', function (string $nome, int $categoria_id=1){
//     echo 'estamos aqui '.$nome .' categoria '. $categoria_id;
// })
// ->where('categoria_id', '[0-9]+')
// ->where('nome', '[A-Za-z]+'); 
// tratando a rota com expressões regulares para que não gere mais o erro de tipo de variável, mas sim o erro de rota não encontrada


