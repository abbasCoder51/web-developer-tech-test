@extends('layouts.admin')

@section('title', 'Featured Talent')

@section('body_content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
        <h1 class="h3 mb-0 text-gray-800">Featured Talent</h1>
        <a href="{{ route('admin.featured-talent.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Create Featured Talent</a>
    </div>
@endsection