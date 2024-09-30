<?php

use Illuminate\Support\Facades\Route;


Route::get('/user/{name?}', function ($name='Naufal') {
    return 'Nama saya '.$name;
});
