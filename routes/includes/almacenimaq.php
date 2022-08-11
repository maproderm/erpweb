<?php

use App\Http\Controllers\admin\AdminController;


Route::group(['middleware' => ['role:superadmin|almacenimaq']], function () {
    //
    Route::get('/almacen',[CategoryController::class,'viewalmacen'])->middleware(['auth'])->name('view-almacen');

    Route::get('/almacen/get-all', [CategoryController::class, 'getAlmacen'])->middleware(['auth'])->name('almacens.get');
    Route::get('/almacen/delete/{id}', [CategoryController::class, 'delete'])->middleware(['auth'])->name('almacens.delete'); //TO: DELETE A USER
    Route::get('/almacen/editar/{id}', [CategoryController::class, 'edit'])->middleware(['auth'])->name('almacens.edit'); //TO: EDIT A USER
    Route::get('/almacen/perfil/{id}', [CategoryController::class, 'viewindividual'])->middleware(['auth'])->name('almacens.getIndividual'); //TO: VER PERFIL DEL USUARIO
});
