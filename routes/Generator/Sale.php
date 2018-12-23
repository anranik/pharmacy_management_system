<?php
/**
 * Sale
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Sale'], function () {
        Route::get('sales/pos','SalesController@pos')->name('sales.pos');
        Route::get('sales/getAllMedicine','SalesController@getAllMedicine')->name('sales.allMedicine');
        Route::get('sales/getAllCustomers','SalesController@getAllCustomers')->name('sales.getAllCustomers');
        Route::resource('sales', 'SalesController');
        //For Datatable
        Route::post('sales/get', 'SalesTableController')->name('sales.get');
    });
    
});