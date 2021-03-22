<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSectionRequest;
use App\Models\Admin\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::query()->paginate(5);

        return view('admin.section.index')
            ->with('sections', $sections);
    }

    public function create()
    {
        return view('admin.section.create');
    }

    public function store(CreateSectionRequest $request)
    {
        $data = [
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'url_link' => $request->get('url_link'),
            'slug' => $request->get('slug')
        ];

        $section = Section::query()->create($data);

        return redirect()->route('admin.sections.index')
            ->with('success', "Section has been created");
    }

    public function edit(Section $section)
    {
        return view('admin.section.edit')
            ->with('section', $section);
    }

    public function update(CreateSectionRequest $request, Section $section)
    {
        $data = [
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'url_link' => $request->get('url_link'),
            'slug' => $request->get('slug')
        ];

        $section->update($data);

        return redirect()->route('admin.sections.index')
            ->with('success', "Section has been updated");
    }

    public function show(Section $section)
    {
        return view('admin.section.show')
            ->with('section', $section);
    }

    public function destroy(Section $section)
    {
        $section->delete();

        return redirect()->route('admin.sections.index')
            ->with('success', "Section has been deleted");
    }
}
