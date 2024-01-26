<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {    
    $data = [
        'MenuItems' => config('navbar'),
        'FooterTopLinks' => config('footer-top-links'),
        'FooterMidLinks' => config('footer-mid-links'),
        'FooterBottomSocials' => config('footer-bottom-socials')
    ];
    // dd($data);

    return view('welcome', $data);
});
