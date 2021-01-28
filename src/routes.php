<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Routes
|--------------------------------------------------------------------------
*/

Route::redirect('{rickroll}', config('rickroll.redirect_url'))
    ->where('rickroll', implode('|', config('rickroll.urls')));
