@extends('layouts.admin')

@section('body_content')
    @include('admin.partials.results')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-5">
        <h1 class="h3 mb-0 text-gray-800">Featured Talent - {{ $featuredTalent->name }}</h1>
        <div>
            <a href="{{ route('admin.featured-talents.edit', $featuredTalent->id) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit fa-sm"></i> Edit</a>
            <form class="d-none d-sm-inline-block" action="{{ route('admin.featured-talents.destroy', $featuredTalent->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-sm btn-danger shadow-sm">
                    <i class="fas fa-trash fa-sm"></i> Delete
                </button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <b>Name:</b> {{ $featuredTalent->name }}<br>
                    <b>Description:</b> {{ $featuredTalent->description }}<br>
                    <b>URL Link:</b> {{ $featuredTalent->url_link }}<br>
                    <b>Location:</b> {{ $featuredTalent->location }}<br>
                    <b>Job Category:</b> {{ $featuredTalent->job_category }}<br>
                    <b>Employment Type:</b> {{ $featuredTalent->employment_type }}<br>
                    <b>Skill:</b> {{ $featuredTalent->description }}<br>
                    <b>Years Experience:</b> {{ $featuredTalent->years_experience }}<br>
                </div>
            </div>
        </div>
    </div>
@endsection