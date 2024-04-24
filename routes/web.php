<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VocalistaController;

Route::get('/', function () {
    return view('index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [VocalistaController::class, 'index'])->name('dashboard');

    Route::resource('vocalistas', VocalistaController::class);

});


