<?php

Route::group(['middleware' => 'web', 'prefix' => 'dashinicial', 'namespace' => 'Modules\DashInicial\Http\Controllers'], function()
{
    Route::get('/', 'DashInicialController@index');
});
