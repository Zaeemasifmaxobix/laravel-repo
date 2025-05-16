<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chatify', [Chatify\Http\Controllers\MessagesController::class, 'index'])->name('chat');

