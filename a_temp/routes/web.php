<?php


Route::get('/', function () {
    return view('welcome');
});


Route::get('/signup', function () {
    return view('auth.cabinet.login');
});


Route::group(
    [
        'prefix' => 'admin',
        'namespace' => 'Admin',
        'as' => 'admin.*',
    ],
    function (){

        Route::get('/', ['as' => 'dashboard', 'uses' => 'Dashboard@show']);
    }
    );

