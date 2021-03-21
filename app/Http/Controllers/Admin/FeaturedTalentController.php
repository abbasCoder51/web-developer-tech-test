<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\FeaturedTalent;
use Illuminate\Http\Request;

class FeaturedTalentController extends Controller
{
    public function index()
    {
        $featuredTalent = FeaturedTalent::query()->paginate(5);

        return view('admin.featured-talent.index')
            ->with('featuredTalents', $featuredTalent);
    }
}
