<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/home2', function () {
    return view('sections.home_section2');
});

Route::get('/services', function () {
    return view('pages.services_page');
});

Route::get('/aboutUs', function () {
    return view('pages.aboutus_page');
});

Route::get('/team', function () {
    return view('pages.team_page');
});

Route::get('/client', function () {
    return view('pages.client_page');
});

Route::get('/article', function () {
    return view('pages.article_page');
});

Route::get('/blogs', function () {
    return view('pages.blogs_page');
});

Route::get('/contact', function () {
    return view('pages.contact_page');
});

Route::get('/privacypolicy', function () {
    return view('pages.privacyPolicy_page');
});

Route::get('terms', function(){
    return view('pages.terms_page');
});

Route::get('/service', function(){
    return view('pages.service_page');
})->name('service_page');

Route::get('/service_b2b', function(){
    return view('pages.service_b2b_page');
})->name('service_b2b_page');