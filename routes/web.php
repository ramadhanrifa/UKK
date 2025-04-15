<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('Login');
});

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
    });
    Route::prefix('/product')->group(function () {
        Route::get('/', [ProductsController::class, 'index'])->name('product.index');
        Route::get('/create', [ProductsController::class, 'create'])->name('product.create');
        Route::post('/post', [ProductsController::class, 'store'])->name('product.store');    
        Route::get('/edit/{id}', [ProductsController::class, 'edit'])->name('product.edit');
        Route::put('/update/{id}', [ProductsController::class, 'update'])->name('product.update');
        Route::delete('/delete/{id}', [ProductsController::class, 'destroy'])->name('product.destroy');
    });

    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('/create', [UserController::class, 'create'])->name("user.create");
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name("user.edit");
        Route::put('/update/{id}', [UserController::class, 'update'])->name("user.update");
        Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name("user.destroy");
        Route::post('/post', [UserController::class, 'store'])->name("user.store");
        Route::post('/search', [UserController::class, 'search'])->name("user.search");
    });
   
});



Route::get('/dashboard', [dashboard::class, 'index'])->name('dashboard');





Route::prefix('pegawai')->group(function () {
    Route::prefix('/product')->group(function () {
       Route::get('/', [ProductsController::class, 'index']); 
    });
    Route::prefix('/purchase')->group(function () {
        Route::get('/', [ProductsController::class, 'index'])->name(name: 'purchase.index');
        Route::get('/create', [ProductsController::class, 'create'])->name('purchase.create');
        Route::post('/post', [ProductsController::class, 'store'])->name('purchase.store');
        Route::get('/edit/{id}', [ProductsController::class, 'edit'])->name('purchase.edit');
        Route::put('/update/{id}', [ProductsController::class, 'update'])->name('purchase.update');
        Route::get('/delete/{id}', [ProductsController::class, 'destroy'])->name('purchase.destroy');
    });


});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::prefix('/user')->group(function () {
    Route::get('/login', [UserController::class, 'create'])->name("user.login");  
});
Route::post('/login', [UserController::class, 'login'])->name("login");
Route::post('/logout', [UserController::class, 'logout'])->name("logout");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
