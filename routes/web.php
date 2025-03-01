<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;

Route::redirect('{rickroll}', Config::get('rickroll.redirect_url'))
    ->whereIn('rickroll', Config::get('rickroll.urls'));
