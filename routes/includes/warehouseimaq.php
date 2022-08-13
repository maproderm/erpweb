<?php

use App\Http\Controllers\Warehouseimaq\Inventory\InventoryController;


Route::group(['middleware' => ['role:superadmin|almacenimaq']], function () {
    //products
    Route::get('/inventory',[InventoryController::class,'index'])->middleware(['auth'])->name('view-inventory');
    Route::get('/create-new-product',[InventoryController::class,'create'])->middleware(['auth'])->name('create-inventory');

    Route::get('/almacen/get-all', [InventoryController::class, 'getAlmacen'])->middleware(['auth'])->name('almacens.get');
    Route::get('/almacen/delete/{id}', [InventoryController::class, 'delete'])->middleware(['auth'])->name('almacens.delete'); //TO: DELETE A USER
    Route::get('/almacen/editar/{id}', [InventoryController::class, 'edit'])->middleware(['auth'])->name('almacens.edit'); //TO: EDIT A USER
    Route::get('/almacen/perfil/{id}', [InventoryController::class, 'viewindividual'])->middleware(['auth'])->name('almacens.getIndividual'); //TO: VER PERFIL DEL USUARIO

    Route::resource('inventory', InventoryController::class)->middleware(['auth'])->names('inventory')->except(['destroy']);
});
