<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/laravel_test', function () {
    $data = [
        'title' => 'BOOLEAN CAREERS',
        'links' => [
            'html',
            'css',
            'javascript',
            'php',
            'laravel'
        ]
    ];
    return view('laravel_test', $data);
});
