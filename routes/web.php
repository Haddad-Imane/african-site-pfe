<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TextileController;
use App\Http\Controllers\RareFindsController;


// web.php

use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/search', [ProductController::class, 'search'])->name('search');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::post('/cart/add/{id}', [ProductController::class, 'addToCart'])->name('cart.add');


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

// routes/web.php
Route::get('/textile', [TextileController::class, 'index'])->name('textile');
Route::get('/moroccan-carpet', [TextileController::class, 'moroccanCarpet'])->name('moroccan.carpet');
Route::get('/moroccan-cloths', [TextileController::class, 'moroccanCloth'])->name('moroccan.cloth');
Route::get('/african-fabric', [TextileController::class, 'africanFabric'])->name('african.fabric');



// routes/web.php
Route::get('/beads', function () {
    return view('beads');
})->name('beads');


Route::get('/items', [TextileController::class, 'index'])->name('items');

Route::get('/checkout', function () {
    return view('items.checkout');
});


// Route pour la page principale de Rare Finds
Route::get('/rare-finds', [RareFindsController::class, 'index'])->name('rare-finds');

// Route pour la page des Vintage Printing Blocks
Route::get('/rare-finds/vintage-printing-blocks', [RareFindsController::class, 'vintagePrintingBlocks'])->name('rare-finds.vintage-printing-blocks');

// Route pour la page des Moroccans Treasures
Route::get('/rare-finds/moroccans-treasures', [RareFindsController::class, 'moroccansTreasures'])->name('moroccans-treasures');

