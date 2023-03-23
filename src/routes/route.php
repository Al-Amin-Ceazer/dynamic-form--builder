<?php

/*use \Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'dynamic-form','namespace'=>'AlAmin\Form\Http\Controllers'],function () {
    Route::get('forms/{key}','FormController@getFrom');
    Route::post('forms','FormController@updateFrom');
});*/

$this->app->router->get('/dynamic-form/forms/{key}','AlAmin\Form\Http\Controllers\FormController@getFrom');
$this->app->router->post('/dynamic-form/forms','AlAmin\Form\Http\Controllers\FormController@updateFrom');