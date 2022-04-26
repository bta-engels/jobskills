<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocaleController extends Controller
{
    public function set(string $locale)
    {
        App::setLocale($locale);
        // function variante
        //app()->setLocale($locale);
    }
}
