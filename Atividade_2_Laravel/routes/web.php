<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exemplo',[AulaController::class,'index']);
Route::get('/biblioteca',[BibliotecaController::class,'index']);
Route::get('/aluno',[AlunoController::class,'index']);
Route::get('/post',[PostController::class,'index']);
Route::get('/bibliotecaUpdate',[BibliotecaController::class,'update']);
Route::get('/alunoUpdate',[AlunoController::class,'update']);
Route::get('/postUpdate',[PostController::class,'update']);