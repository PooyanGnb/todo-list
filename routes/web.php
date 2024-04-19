<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        'name' => 'pooyan!'
    ]);
});

Route::get('/hello', function () {
    return "pooyan";
})-> name('hello');

Route::get('/hallo', function () {
    return redirect()->route('hello');
});

Route::get('/greet/{name}', function ($name) {
    return "hello $name!";
});

Route::fallback(function ($name) {
    return "hello!";
});
