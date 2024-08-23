<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio.index');
})->name('portfolio.home');

Route::get('locale/{lang}', 'App\Http\Controllers\LanguageController@GetLanguage')->name('language.change');

Route::post('/sendmessage' , 'App\Http\Controllers\MessageController@addMessage')->name('message.send') ;
