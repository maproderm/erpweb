<?php

use App\Http\Controllers\Warehouseimaq\Inventory\InventoryController;


Route::group(['middleware' => ['role:developer|superadmin|almacenimaq']], function () {
    //products
    Route::get('/inventory',[InventoryController::class,'index'])->middleware(['auth'])->name('view-inventory');
    Route::get('/create-new-product',[InventoryController::class,'create'])->middleware(['auth'])->name('create-inventory');
    Route::post('/store',[InventoryController::class,'store'])->middleware(['auth'])->name('inventory.store');
    Route::get('/products/get-general-all', [InventoryController::class, 'getProducts'])->middleware(['auth'])->name('products.get'); // TO: GENERAL

});
