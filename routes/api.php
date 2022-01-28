<?php

use App\Http\Controllers\CommentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('posts/{id}/comments',[CommentController::class,'index']);
Route::post('/comments',[CommentController::class,'store']);