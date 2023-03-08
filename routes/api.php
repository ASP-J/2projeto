<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;
use App\Models\User;
use App\Models\Book;
use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* Usuarios */
Route::post('/users',[UserController::class, 'store']);
Route::get('/users',[UserController::class, 'index']);
Route::get('/users/{user}',[UserController::class, 'show']);
Route::put('/users/{user}',[UserController::class, 'update']);
Route::delete('/users/{user}',[UserController::class, 'destroy']);

/* Livros */
Route::get('/books',[BookController::class, 'index']);
Route::get('/books/{book}',[BookController::class, 'show']);
Route::post('/books',[BookController::class, 'store']);
Route::put('/books/{book}',[BookController::class, 'update']);
Route::delete('/books/{book}',[BookController::class, 'destroy']);

/* Emprestimos */
Route::get('/loans',[LoanController::class, 'index']);
Route::get('/loans/{loan}',[LoanController::class, 'show']);
Route::post('/loans',[LoanController::class, 'store']);
Route::put('/loans/{loan}',[LoanController::class, 'update']);
Route::delete('/loans/{loan}',[LoanController::class, 'destroy']);