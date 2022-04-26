<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController extends Controller
{
    public function set(string $locale) {
        App::setLocale($locale);
    }
}
