<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('app.index');
    }

    public function talent()
    {
        return view('app.talent');
    }
}
