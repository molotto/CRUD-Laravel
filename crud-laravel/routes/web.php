<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [EventController::class, 'index']);
Route::get('/eventos/criar', [EventController::class, 'create'])->middleware('auth');
Route::get('/eventos/{id}', [EventController::class, 'show']);
Route::post('/eventos', [EventController::class, 'store']);
Route::delete('/eventos/{id}', [EventController::class, 'destroy'])->middleware('auth');
Route::get('/eventos/edit/{id}', [EventController::class, 'edit'])->middleware('auth');
Route::put('/eventos/update/{id}', [EventController::class, 'update'])->middleware('auth');

Route::get('/contato', [EventController::class, 'contato']);

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');

Route::post('/eventos/join/{id}', [EventController::class, 'joinEvent'])->middleware('auth');

Route::delete('/eventos/leave/{id}', [EventController::class, 'leaveEvent'])->middleware('auth');
