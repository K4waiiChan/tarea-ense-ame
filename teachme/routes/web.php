<?php

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/registrar-docente', function () {
    return view('teachers.register');
})->name('0001')->middleware('role:administrador');