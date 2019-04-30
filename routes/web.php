<?php

Route::get('/', function () {
    return view('pages.about');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/entry', function () {
    return view('pages.entry');
});

// Route::get('/thank', function () {
//     return view('pages.thank');
// });

Route::post('/term','formController@index');

Route::post('/checkout','formController@store')->name('checkout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
