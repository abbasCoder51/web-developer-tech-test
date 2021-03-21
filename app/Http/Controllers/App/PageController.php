<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Admin\FeaturedTalent;

class PageController extends Controller
{
    public function index()
    {
        return view('app.index');
    }

    public function talent()
    {
        $featuredTalents = FeaturedTalent::query()->get();

        return view('app.talent')
            ->with('featuredTalents', $featuredTalents);
    }
}
