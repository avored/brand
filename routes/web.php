<?php



Route::middleware(['web'])
    ->namespace('AvoRed\Brand\Http\Controllers')
    ->group(function () {
        Route::get('brand/{id}', 'BrandController@index')->name('brand.index');

    });