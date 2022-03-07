<?php

use Illuminate\Routing\RouteGroup;
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

// se debe colocar toda la ruta donde se almacenan los controladores

Route::get('/', [\App\Http\Controllers\HomeController::class,'getHome']);

// grupo de rutas para catalogo
Route::controller(\App\Http\Controllers\CatalogController::class)->group(function(){
    Route::get('/catalog','getIndex');

    Route::get('/catalog/show/{id}','getShow');

    Route::get('/catalog/create','getCreate');

    Route::get('/catalog/edit/{id}','getEdit');
});

// procesamieto de los datos para catalogo

Route::post('/catalog/create',[\App\Http\Controllers\CatalogProcessController::class,'addMovie']);

Route::post('/catalog/edit',[\App\Http\Controllers\CatalogProcessController::class,'editMovie']);




Route::get('/login', function () {
    return view('auth.login');
});

Route::POST('/logout', function () {
    return "Logout saliendo de la sesión";
});
