<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

// When contact delivery is ready, add POST /contact and connect validation,
// persistence, and mail handling without changing the Blade form fields.
