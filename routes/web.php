<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use InternetGuru\LaravelCommon\Contracts\ReCaptchaInterface;

Route::get('/', function () {
    return view('welcome');
})
    ->name('home');

Route::post('/', function (Request $request, ReCaptchaInterface $reCaptcha) {
    $reCaptcha->validate($request);

    return redirect()->route('home')->with('success', 'Form submitted successfully!');
})
    ->name('submit');
