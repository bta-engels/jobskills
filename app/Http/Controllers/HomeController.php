<?php

namespace App\Http\Controllers;

use getID3;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $getID3 = new getID3();
        $data = $getID3->analyze(base_path('docs/hey_bulldog.avi'));
//        dd($data);
//        dd($data['playtime_string']);
        return view('home');
    }
}
