<?php

use App\Http\Controllers\Warehouseimaq\Catalog\BrandController;


Route::group(['middleware' => ['role:developer|superadmin|almacenimaq']], function () {
    //products
    Route::get('/brands',[BrandController::class,'index'])->middleware(['auth'])->name('brands.index');
    Route::get('/brands/get-general-all', [BrandController::class, 'getBrands'])->middleware(['auth'])->name('brands.get'); // TO: GENERAL
    Route::resource('brands', BrandController::class)->middleware(['auth'])->names('brands')->except(['destroy']);

});
