<?php

$namespace = 'Modules\Login\Http\Controllers';


Route::group(['middleware' => 'web', 'prefix' => 'login', 'namespace' => $namespace], function()
{
    Route::get('/', 'LoginController@viewLogin')->name('login');


    Route::post('/logar', 'LoginController@loginPost')->name('login/post');
});
