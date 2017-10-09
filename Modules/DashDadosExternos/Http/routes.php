<?php

Route::group(['middleware' => 'web', 'prefix' => 'dashdadosexternos', 'namespace' => 'Modules\DashDadosExternos\Http\Controllers'], function()
{
    Route::get('/', 'DashDadosExternosController@index');
});
