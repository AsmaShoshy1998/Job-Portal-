<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobPostController;
use App\Http\Controllers\API\AuthController;


Route::post('/login',[AuthController::class,'login']);
Route::post('/register',[AuthController::class,'register']);

Route::middleware(['auth:sanctum'])->group(function (){
    Route::post('/logout',[AuthController::class,'logout']);

    Route::get('/job_posts',[JobPostController::class,'getposts']);
Route::get('/single_job_post/show/{id}',[JobPostController::class,'showpost']);
Route::post('/single_job_post/update/{id}',[JobPostController::class,'updatepost']);

Route::post('job_posts/add',[JobPostController::class,'job_post_store']);
Route::delete('job_post/delete/{id}',[JobPostController::class,'job_post_delete']);

});
