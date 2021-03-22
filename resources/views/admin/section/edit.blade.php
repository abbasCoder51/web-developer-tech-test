@extends('layouts.admin')

@section('title', 'Edit Section')

@section('body_content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-5">
        <h1 class="h3 mb-0 text-gray-800">Edit Section</h1>
    </div>

    @include('admin.partials.results')

    <div class="card shadow">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.sections.update', $section->id ) }}">
                @method('PUT')
                @include('admin.section.form')
            </form>
        </div>
    </div>
@endsection