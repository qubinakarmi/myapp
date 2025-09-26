<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;
use  App\Http\Controllers\MailController;
use Illuminate\Support\Str;


Route::get('/', function () {
    return view('welcome');
});

Route::view('add','add');
Route::view('home','home');




Route::post('add',[UserController::class,'add']);
Route::get('user-list',[UserController::class,'list']);
Route::get('delete/{id}',[UserController::class,'delete']);
Route::get('edit/{id}',[UserController::class,'edit']);


Route::put('edit-list/{id}',[UserController::class,'editlist']);

Route::get('search-list',[UserController::class,'search']);
Route::post('delete-Multi',[UserController::class,'deleteMultiple']);

Route::get('test-list',[UserController::class,'testlist']);

// Relationship

Route::get('seller',[UserController::class,'seller']);
Route::get('one-to-many',[UserController::class,'sellerMany']);
Route::get('many-to-one',[UserController::class,'ManyTofunction']);


// mail
Route::view('send-mail','send-mail');
Route::post('send-mail',[MailController::class,'sendEmail']);


// Fluent String
Route::get('/test', function () {
    $info = "hi its me laravel";
    $info = Str::of($info)->ucfirst()->replaceFirst('Hi','Hello',$info);
    return $info;
});

// Route-Model Binding

Route::get('bind/{key:name}',[UserController::class,'bind']);