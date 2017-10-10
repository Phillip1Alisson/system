<?php

Route::group(['middleware' => 'web', 'prefix' => 'login', 'namespace' => 'Modules\Login\Http\Controllers'], function()
{
    Route::get('/view', 'LoginController@view');


    Route::get('/logar', 'LoginController@postLogar')->name('login/logar');
});
