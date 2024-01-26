<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // $menuitems = config('navbar');

    $data = [
        'MenuItems' => config('navbar'),
        'FooterTopLinks' => config('footer-top-links')
    ];
    // dd($data);

    return view('welcome', $data);
});
