<?php

Route::group(['middleware' => 'web', 'prefix' => 'exporta', 'namespace' => 'Modules\Exporta\Http\Controllers'], function()
{
    Route::get('/', 'ExportaController@index');
});
