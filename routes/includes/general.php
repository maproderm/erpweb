<?php

use App\Http\Controllers\admin\AdminController;
// Login route
Route::get('/', function () {
    return redirect()->route('login');
});

// Route::get('/account-deactivated', function () {
//     return redirect()->route('account-deactivated');
// });

Route::get('/account-deactivated',[AdminController::class,'deactivated'])->name('account-deactivated');

// Dashboard route
Route::get('/dashboard',[AdminController::class,'dashboard'])->middleware(['auth'])->name('dashboard');
