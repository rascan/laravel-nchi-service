<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/v1/'], function () {
    Route::apiResource('countries', 'CountryController')->only([
        'index', 'store', 'show', 'update',
    ]);

    Route::apiResource('boundaries', 'BoundaryController')->only([
        'index', 'store', 'show',
    ]);
});
