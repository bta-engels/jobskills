<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocaleController extends Controller
{
    public function set(string $locale)
    {
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
