<?php

Route::group(['middleware' => 'web', 'prefix' => 'mailing', 'namespace' => 'Modules\Mailing\Http\Controllers'], function()
{
    Route::get('/', 'MailingController@index');
});
