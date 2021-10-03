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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('blade-components', function (){
    return view('blade-components');
})->name('blade-components');

Route::get('middleware-test', function (){
    return 'La solicitud HTTP se ha llevado ha cabo correctamente.';
})->middleware(['auth:sanctum', 'age']);

Route::get('middleware-failed', function (){
    return 'No cumple los requisitos para continuar con la solicitud HTTP.';
})->name('failed');

/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');*/
