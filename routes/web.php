<?php
Route::get('/', function () {
    return view('home');
});

Route::get('/jo', function () {
    return view('user.mypronto');
});
