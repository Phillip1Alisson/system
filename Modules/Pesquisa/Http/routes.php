<?php

Route::group(['middleware' => 'web', 'prefix' => 'pesquisa', 'namespace' => 'Modules\Pesquisa\Http\Controllers'], function()
{
    Route::get('/', 'PesquisaController@index');
});
