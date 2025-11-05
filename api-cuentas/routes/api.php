<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//IMPORTAR EL CONTROLADOR PARA LA RUTA
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TransactionsController;

//redirecciona al index de AccountsController
Route::resource('accounts',AccountsController::class);
Route::post('changeStatus',[AccountsController::class,'changeStatus']);


Route::resource('categories',CategoriesController::class);
Route::resource('transactions',TransactionsController::class);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
