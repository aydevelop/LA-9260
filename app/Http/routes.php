<?php


Route::get('subscribe', 'SubscribeController@showSubscribe');
Route::post('subscribe', 'SubscribeController@processSubscribe');

Route::group(['middleware'=>'auth'], function(){
    Route::get('welcome', 'SubscribeController@shoWelcome')->middleware('sub');

    Route::get('account','AccountController@ahowAccount');
    Route::post('account/subscription', 'AccountController@updateSubscription');
    Route::post('account/card','AccountController@updateCard');
    Route::delete('account/subscription', 'AccountController@deleteSubscription');
    
    Route::get('account/invoices/{invoice}', 'AccountController@downloadInvoice');
});


Route::auth();
Route::get('/', 'SiteController@showHome');
Route::get('{slug}', 'SiteController@showPost');



