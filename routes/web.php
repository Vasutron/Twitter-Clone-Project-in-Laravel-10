<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\ProfileController;
use App\Models\Idea;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('',[DashboardController::class, 'index'] )->name('dashboard');

Route::resource('ideas',IdeaController::class)->except(['index','create','show'])->middleware('auth');

Route::resource('ideas',IdeaController::class)->only(['show']);

Route::resource('ideas.comments',CommentController::class)->only(['store'])->middleware('auth');

Route::resource('users',UserController::class)->only(['show','edit','update'])->middleware('auth');

Route::get('profile',[UserController::class,'profile'])->middleware('auth')->name('profile');

Route::get('/terms', function (){
    return view('terms');
} );


// https://www.youtube.com/watch?v=986iFLWJ8o8&list=PLqDySLfPKRn5d7WbN9R0yJA9IRgx-XBlU&index=28
