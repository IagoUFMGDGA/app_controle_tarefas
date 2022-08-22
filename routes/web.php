<?php

use Illuminate\Support\Facades\Route;
use App\Mail\MensagemTesteMail;
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

Route::get('/', function () {
    return view('bem-vindo');
});

Auth::routes(['verify' => true]); // informando que no processo de registro de novos usuários o e-mail de verificação deve ser enviado

Route::get('/home', [App\Http\Controllers\TarefaController::class, 'index'])
    ->name('home')
    ->middleware('verified'); // fazendo que essa rota seja servida somente depois da validação de e-mail 

Route::get('/tarefa/exportacao', 'App\Http\Controllers\TarefaController@exportacao')->name('tarefa.exportacao');
Route::resource('/tarefa', 'App\Http\Controllers\TarefaController')
    ->middleware('verified');

Route::get('mensagem-teste', function (){
    return new MensagemTesteMail();
    //Mail::to(auth()->user()->mail )->send(new MensagemTesteMail());
    //return "E-mail enviado com sucesso";
});