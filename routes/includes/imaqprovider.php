<?php

use App\Http\Controllers\Warehouseimaq\Catalog\ProviderController;


Route::group(['middleware' => ['role:developer|superadmin|almacenimaq']], function () {

    //providers
    Route::get('/providers',[ProviderController::class,'index'])->middleware(['auth'])->name('view-provider-imaq');
    Route::get('/create-provider',[ProviderController::class,'create'])->middleware(['auth'])->name('create-provider-imaq');
    Route::post('/save-provider-imaq',[ProviderController::class,'store'])->middleware(['auth'])->name('provider.store');
    Route::get('/providers/get-general-all', [ProviderController::class, 'getGeneralProviders'])->middleware(['auth'])->name('providers.get'); // TO: GENERAL

});
