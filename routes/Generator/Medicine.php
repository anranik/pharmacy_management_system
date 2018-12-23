<?php
/**
 * Medicine
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Medicine'], function () {
        Route::resource('medicines', 'MedicinesController');
        //For Datatable
        Route::post('medicines/get', 'MedicinesTableController')->name('medicines.get');
    });
    
});