<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('inscricao', [App\Http\Controllers\InscricaoController::class, 'lista'])
    ->name('lista');


Route::post('inscricao', [App\Http\Controllers\InscricaoController::class, 'salvar'])
    ->name('salvar');
