@extends('layouts.admin')

@section('title', 'Edit Featured Talent')

@section('body_content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-5">
        <h1 class="h3 mb-0 text-gray-800">Edit Featured Talent</h1>
    </div>

    @include('admin.partials.results')

    <div class="card shadow">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.featured-talents.update', $featuredTalent->id ) }}" enctype="multipart/form-data">
                @method('PUT')
                @include('admin.featured-talent.form')
            </form>
        </div>
    </div>
@endsection