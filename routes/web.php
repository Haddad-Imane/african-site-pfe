<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TextileController;

Route::get('/home', function () {
    return view('home');
});


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route protégée pour la redirection après connexion
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); // Assurez-vous d'avoir une vue 'dashboard.blade.php'
    })->name('dashboard');
});


Route::get('/footer', function () {
    return view('footer');
});
// Show the registration form
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Handle the registration form submission
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');



// Routes pour les textiles


Route::get('/textiles/african_fabric', [TextileController::class, 'africanFabric'])->name('textiles.african_fabric');


