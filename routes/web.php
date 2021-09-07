<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;


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
});

Route::get('/',[PageController::class,'index']);
Route::get('/uploadpage',[PageController::class,'uploadpage']);
Route::post('/uploadproduct',[PageController::class,'store']);


Route::get('/show',[PageController::class,'show'])->name('show');
Route::get('/download/{file}',[PageController::class,'download']);
Route::get('/view/{id}',[PageController::class,'view']);