<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Admin\FeaturedTalent;
use App\Models\Admin\Section;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $sectionHomeHero = Section::query()->where('slug', 'home-hero')->first();
        $sectionHomeConnected = Section::query()->where('slug', 'home-connected')->first();
        $featuredTalents = FeaturedTalent::query()->limit(5)->get();

        return view('app.index')
            ->with('featuredTalents', $featuredTalents)
            ->with('sectionHomeHero', $sectionHomeHero)
            ->with('sectionHomeConnected', $sectionHomeConnected);
    }

    public function talent(Request $request)
    {
        $featuredTalents = FeaturedTalent::query();

        if($request->ajax()) {
            if ($request->get('location')) {
                $featuredTalents = $featuredTalents->where('location', $request->get('location'));
            }

            if ($request->get('job_category')) {
                $featuredTalents = $featuredTalents->where('job_category', $request->get('job_category'));
            }

            if ($request->get('employment_type')) {
                $featuredTalents = $featuredTalents->where('employment_type', $request->get('employment_type'));
            }

            if ($request->get('skill')) {
                $featuredTalents = $featuredTalents->where('skill', $request->get('skill'));
            }

            if ($request->get('years_experience')) {
                $featuredTalents = $featuredTalents->where('years_experience', '>=', $request->get('years_experience'));
            }

            return [
                'data' => $featuredTalents->get()->toArray()
            ];
        }

        $sectionTalentHero = Section::query()->where('slug', 'talent-hero')->first();
        $featuredTalents = FeaturedTalent::query();
        $locations = $featuredTalents->get()->unique('location')->pluck('location');
        $jobCategories = $featuredTalents->get()->unique('job_category')->pluck('job_category');
        $employmentTypes = $featuredTalents->get()->unique('employment_type')->pluck('employment_type');
        $skills = $featuredTalents->get()->unique('skill')->pluck('skill');

        return view('app.talent')
            ->with('sectionTalentHero', $sectionTalentHero)
            ->with('featuredTalents', $featuredTalents->get())
            ->with('locations', $locations)
            ->with('jobCategories', $jobCategories)
            ->with('employmentTypes', $employmentTypes)
            ->with('skills', $skills);
    }
}
