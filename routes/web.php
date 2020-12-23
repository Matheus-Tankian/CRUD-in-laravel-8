<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

use App\Http\Controllers\ProductController;
use App\Http\Controllers\FuncionariosController;
  
Route::group(['middleware' => 'web'], function(){
    Auth::routes();
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
});

Route::resource('funcionarios', FuncionariosController::class)->middleware('auth');

Route::resource('products', ProductController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\ProductController::class, 'index'])->name('/');

