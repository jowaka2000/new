<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistersController;
use App\Http\Controllers\Posts\PostsController;
use App\Http\Controllers\Profile\ProfilesController;
use Illuminate\Support\Facades\Route;



Route::get('s',function(){
    return 'kdsajl';
});

Route::controller(PostsController::class)->group(function(){
    Route::get('/','index')->name('home');
    Route::get('post/create','create')->name('post.create');
    Route::post('post/create','store');
    Route::get('post/{post}','show')->name('post.show');
    Route::get('post/{post}/edit','edit')->name('post.edit');

});
Route::controller(LoginController::class)->group(function(){
    Route::get('login','index')->name('login');
    Route::post('login','store');
    Route::get('reset-password','resetPassword')->name('reset-password');
    Route::get('logout','logout')->name('logout');
});


Route::controller(RegistersController::class)->group(function(){
    Route::get('sign-up','index')->name('register');
    Route::post('sign-up','store');
});


Route::controller(ProfilesController::class)->group(function(){
    Route::get('profile','index')->name('profile.index');
});
