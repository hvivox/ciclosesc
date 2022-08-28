<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//nome da rota diferenciada para evitar problemas
Route::get('adminevento/inscricao', [App\Http\Controllers\InscricaoController::class, 'lista'])
    ->name('lista');


Route::post('inscricao', [App\Http\Controllers\InscricaoController::class, 'salvar'])
    ->name('salvar');
