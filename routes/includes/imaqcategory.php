<?php

use App\Http\Controllers\Warehouseimaq\Catalog\CategoryController;


Route::group(['middleware' => ['role:developer|superadmin|almacenimaq']], function () {
    //products
    Route::get('/categories',[CategoryController::class,'index'])->middleware(['auth'])->name('imaqcategories.index');
    Route::get('/categories/get-general-all', [CategoryController::class, 'getCategories'])->middleware(['auth'])->name('imaqcategories.get'); // TO: GENERAL
    Route::get('/categories/delete/{id}', [CategoryController::class, 'delete'])->middleware(['auth'])->name('imaqcategories.delete'); //TO: DELETE
    Route::resource('categories', CategoryController::class)->middleware(['auth'])->names('imaqcategories')->except(['destroy']);

});
