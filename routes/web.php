<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::get('/test', function() {
    return view('auth.passwords.reset');
});
Route::get('/{any}', 'AppController@index')->where('any', '.*');

