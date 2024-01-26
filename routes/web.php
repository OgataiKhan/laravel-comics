<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {    
    $data = [
        'MenuItems' => config('navbar'),
        'FooterTopLinks' => config('footer-top-links'),
        'FooterMidLinks' => config('footer-mid-links'),
        'FooterBottomSocials' => config('footer-bottom-socials')
    ];

    return view('welcome', $data);
})->name('home');

Route::get('/comics', function () {    
    $data = [
        'MenuItems' => config('navbar'),
        'FooterTopLinks' => config('footer-top-links'),
        'FooterMidLinks' => config('footer-mid-links'),
        'FooterBottomSocials' => config('footer-bottom-socials')
    ];

    return view('comics', $data);
})->name('comics');