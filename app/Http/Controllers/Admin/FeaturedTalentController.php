<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\FeaturedTalent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeaturedTalentController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $featuredTalent = FeaturedTalent::query()->paginate(5);

        return view('admin.featured-talent.index')
            ->with('featuredTalents', $featuredTalent);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.featured-talent.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'url_link' => $request->get('url_link'),
            'location' => $request->get('location'),
            'job_category' => $request->get('job_category'),
            'employment_type' => $request->get('employment_type'),
            'skill' => $request->get('skill'),
            'years_experience' => $request->get('years_experience')
        ];

        $imagePathRequest = $request->file('image');
        if ($imagePathRequest) {
            $imagePath = $imagePathRequest->storeAs(
                'images/featured-talents',
                time() . '.' . $imagePathRequest->extension(),
                'public_folder'
            );

            $data['image'] = $imagePath;
        }

        $featuredTalent = FeaturedTalent::query()->create($data);

        return redirect()->route('admin.featured-talents.index')
            ->with('success', sprintf("%s - has been created", $featuredTalent->name));
    }

    /**
     * @param FeaturedTalent $featuredTalent
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(FeaturedTalent $featuredTalent)
    {
        return view('admin.featured-talent.edit')
            ->with('featuredTalent', $featuredTalent);
    }

    /**
     * @param Request $request
     * @param FeaturedTalent $featuredTalent
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, FeaturedTalent $featuredTalent)
    {
        $data = [
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'url_link' => $request->get('url_link'),
            'location' => $request->get('location'),
            'job_category' => $request->get('job_category'),
            'employment_type' => $request->get('employment_type'),
            'skill' => $request->get('skill'),
            'years_experience' => $request->get('years_experience')
        ];

        $imagePathRequest = $request->file('image');
        if ($imagePathRequest) {
            $imagePath = $imagePathRequest->storeAs(
                'images/featured-talents',
                time() . '.' . $imagePathRequest->extension(),
                'public_folder'
            );

            Storage::disk('public_folder')->delete($featuredTalent->image);

            $data['image_path'] = $imagePath;
        }

        $featuredTalent->update($data);

        return redirect()->route('admin.featured-talents.index')
            ->with('success', sprintf("%s - has been updated", $featuredTalent->name));
    }

    /**
     * @param FeaturedTalent $featuredTalent
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(FeaturedTalent $featuredTalent)
    {
        return view('admin.featured-talent.show')
            ->with('featuredTalent', $featuredTalent);
    }

    public function destroy(FeaturedTalent $featuredTalent)
    {
        $featuredTalent->delete();

        Storage::disk('public_folder')->delete($featuredTalent->image);

        return redirect()->route('admin.featured-talents.index')
            ->with('success', sprintf("%s - has been deleted", $featuredTalent->name));
    }
}
