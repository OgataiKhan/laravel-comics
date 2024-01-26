<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // $menuitems = config('navbar');

    $data = [
        'menuitems' => config('navbar')
    ];
    // dd($data);

    return view('welcome', $data);
});
