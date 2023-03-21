<?php

use \Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'dynamic-form','namespace'=>'AlAmin\Form\Http\Controllers'],function () {
    Route::get('forms/{key}','FormController@getFrom');
    Route::post('forms','FormController@updateFrom');
});
