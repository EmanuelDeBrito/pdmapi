<?php

use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('produtos', ProdutoController::class);
Route::resource('empresas', EmpresaController::class);