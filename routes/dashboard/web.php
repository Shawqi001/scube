<?php
Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', function () {
        return View::make('layouts/dashboard/dashboard');
    });

    Route::get('test', function () {
        Route::prefix('dashboard')->name('dashboard.')->group(function () {

            Route::get('/check', function () {
                return " this is dashboard page";
            });
        });
    });
});//end of dashboard
