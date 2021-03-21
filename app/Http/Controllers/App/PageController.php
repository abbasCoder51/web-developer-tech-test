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
        $locations = $featuredTalents->unique('location')->pluck('location');
        $jobCategories = $featuredTalents->unique('job_category')->pluck('job_category');
        $employmentTypes = $featuredTalents->unique('employment_type')->pluck('employment_type');
        $skills = $featuredTalents->unique('skill')->pluck('skill');

        return view('app.talent')
            ->with('featuredTalents', $featuredTalents)
            ->with('locations', $locations)
            ->with('jobCategories', $jobCategories)
            ->with('employmentTypes', $employmentTypes)
            ->with('skills', $skills);
    }
}
