<?php
/**
 * Manufacturer
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Manufacturer'], function () {
        Route::resource('manufacturers', 'ManufacturersController');
        //For Datatable
        Route::post('manufacturers/get', 'ManufacturersTableController')->name('manufacturers.get');
    });
    
});