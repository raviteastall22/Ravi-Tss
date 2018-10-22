<?php

    Route::get('/', function () {
        return view('welcome');
    });
    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/single-owner', 'SingleownerController@single_owner')->name('single_owner');

    Route::get('/get-country-list', 'TransporterController@getCountryList')->name('getCountryList');
    Route::get('/get-cityy-list', 'TransporterController@getcitylist')->name('getcitylist');
    Route::get('/get-country-code', 'TransporterController@getCountryCode')->name('get_country_code'); 

    Route::get('/email/{id}','Auth\RegisterController@sendMail')->name('email.verification-mail');
    Route::get('/transporter/verification-mail/{id}','TransporterController@verificationMail')->name('verificationMail');

//transporter/verification-mail

