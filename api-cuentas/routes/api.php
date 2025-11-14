<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//IMPORTAR EL CONTROLADOR PARA LA RUTA
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\AuthController;


//RUTA DEL LOGIN
Route::post('/login',[AuthController::class,'login']);
//Proteger vistas. Si hay una ruta fuera del grupo, cualquier persona puede hacerle peticion
//para enviar token
Route::middleware("jwt")->group(function(){


//redirecciona al index de AccountsController
Route::resource('accounts',AccountsController::class);
Route ::post('changeStatus',[AccountsController::class,'changeStatus']);


Route::resource('categories',CategoriesController::class);
Route::resource('transactions',TransactionsController::class);


});

