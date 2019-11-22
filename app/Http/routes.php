<?php


Route::get('subscribe', 'SubscribeController@showSubscribe');
Route::post('subscribe', 'SubscribeController@processSubscribe');

Route::group(['middleware'=>'auth'], function(){
    Route::get('welcome', 'SubscribeController@shoWelcome')->middleware('sub');
});


Route::auth();
Route::get('/', 'SiteController@showHome');
Route::get('{slug}', 'SiteController@showPost');



