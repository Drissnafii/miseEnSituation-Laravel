<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'you are in the view page';
});


Route::get('/products', function () {
    return '<h1>This is the Productes page</h1>';
});
