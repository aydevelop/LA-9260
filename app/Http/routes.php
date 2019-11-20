<?php


Route::get('subscribe', 'SubscribeController@showSubscribe');
Route::post('subscribe', 'SubscribeController@processSubscribe');




Route::auth();
Route::get('/', 'SiteController@showHome');
Route::get('{slug}', 'SiteController@showPost');

