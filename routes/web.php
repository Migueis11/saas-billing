<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('clients', [ClientController::class, 'index']);

Route::view('clients', 'clients')
    ->middleware(['auth', 'verified'])
    ->name('clients');

Route::view('invoices', 'invoices')
    ->middleware(['auth', 'verified'])
    ->name('invoices');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
