<?php
/**
 * Medicinecategory
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Medicinecategory'], function () {
        Route::resource('medicinecategories', 'MedicinecategoriesController');
        //For Datatable
        Route::post('medicinecategories/get', 'MedicinecategoriesTableController')->name('medicinecategories.get');
    });
    
});