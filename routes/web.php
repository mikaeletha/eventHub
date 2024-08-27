<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/index', [EventController::class, 'index'])->name('event.index');
Route::get('/show-event', [EventController::class, 'show'])->name('event.show');
Route::get('/create-event', [EventController::class, 'create'])->name('event.create');
Route::post('/store-event', [EventController::class, 'store'])->name('event.store');
Route::get('/edit-event', [EventController::class, 'edit'])->name('event.edit');
Route::put('/update-event', [EventController::class, 'update'])->name('event.update');
Route::delete('/destroy-event', [EventController::class, 'destroy'])->name('event.destroy');
