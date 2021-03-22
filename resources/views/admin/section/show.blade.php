@extends('layouts.admin')

@section('title', "Show Section")

@section('body_content')
    @include('admin.partials.results')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-5">
        <h1 class="h3 mb-0 text-gray-800">Section - {{ $section->title }}</h1>
        <div>
            <a href="{{ route('admin.sections.edit', $section->id) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit fa-sm"></i> Edit</a>
            <form class="d-none d-sm-inline-block" action="{{ route('admin.sections.destroy', $section->id) }}" method="POST">
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
                    <b>Title:</b> {{ $section->title }}<br>
                    <b>Description:</b> {{ $section->description }}<br>
                    <b>URL Link:</b> {{ $section->url_link }}<br>
                    <b>Slug:</b> {{ $section->slug }}<br>
                </div>
            </div>
        </div>
    </div>
@endsection