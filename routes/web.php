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

Route::get('/admin/inscricao', function () {
    return view('lista-inscritos-ciclosesc');
});


Route::get('/', function () {
    return view('inscricao');
});


Route::get('{any?}', function () {
    return view('inscricao');
})->where("any", ".*");


Route::get('/inscricao-concluida', function () {
    return view('inscricao-concluida');
})->name('inscricao-concluida');



/*Route::middleware('web')->group(function () {


    Route::get('inscricao', [App\Http\Controllers\InscricaoController::class, 'lista'])
        ->name('lista');


    Route::post('inscricao', [App\Http\Controllers\InscricaoController::class, 'salvar'])
        ->name('salvar');
});
*/
