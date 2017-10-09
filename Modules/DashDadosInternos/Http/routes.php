<?php

Route::group(['middleware' => 'web', 'prefix' => 'dashdadosinternos', 'namespace' => 'Modules\DashDadosInternos\Http\Controllers'], function()
{
    Route::get('/', 'DashDadosInternosController@index');
});
