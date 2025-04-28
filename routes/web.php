<?php

use App\Http\Controllers\PollController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PollController::class, 'home'])->name('home');

Route::get('/votar/{id}', [PollController::class, 'voting'])->name('voting');

Route::get('/criar-enquete', [PollController::class, 'create'])->name('create');

Route::post('/delete/{id}', [PollController::class, 'destroy'])->name('delete-poll');
