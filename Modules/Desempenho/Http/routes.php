<?php

Route::group(['middleware' => 'web', 'prefix' => 'desempenho', 'namespace' => 'Modules\Desempenho\Http\Controllers'], function()
{
    Route::get('/', 'DesempenhoController@index');
});
