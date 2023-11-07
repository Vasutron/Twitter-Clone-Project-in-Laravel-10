<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

/dashboard

/profile

/users

/feed

*/


Route::get('/',[DashboardController::class, 'index'] )->name('dashboard');

Route::get('/ideas/{idea}',[IdeaController::class, 'show'] )->name('ideas.show');

Route::get('/ideas/{idea}/edit',[IdeaController::class, 'edit'] )->name('ideas.edit')->middleware('auth');

Route::put('/ideas/{idea}',[IdeaController::class, 'update'] )->name('ideas.update')->middleware('auth');

Route::post('/idea',[IdeaController::class, 'store'] )->name('idea.store');

// Route::post('/idea',[IdeaController::class, 'store'] )->name('idea.create');

Route::delete('/ideas/{idea}',[IdeaController::class, 'destroy'] )->name('idea.destroy')->middleware('auth');

Route::post('/ideas/{idea}/comments',[CommentController::class, 'store'] )->name('ideas.comments.store')->middleware('auth');

Route::get('/register',[AuthController::class, 'register'] )->name('register');

Route::post('/register',[AuthController::class, 'store'] );

Route::get('/login',[AuthController::class, 'login'] )->name('login');

Route::post('/login',[AuthController::class, 'authenticate'] );

Route::post('/logout',[AuthController::class, 'logout'] )->name('logout');

Route::get('/terms', function (){
    return view('terms');
} );
