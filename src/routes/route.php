<?php

use \Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'form','namespace'=>'AlAmin\Form\Http\Controllers'],function () {
    Route::get('get-form-by-key/{key}','FormController@getFromBySlug');
    Route::post('update-form-by-slug','FormController@updateFromBySlug');
});
