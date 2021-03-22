@extends('layouts.admin')

@section('title', 'Sections')

@section('body_content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
        <h1 class="h3 mb-0 text-gray-800">Sections</h1>
        <a href="{{ route('admin.sections.create') }}"
           class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Create Section</a>
    </div>

    @include('admin.partials.results')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Overview</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0"
                                   role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                <tr role="row">
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Url Link</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($sections as $section)
                                    <tr role="row">
                                        <td>{{ $section->title }}</td>
                                        <td>{{ $section->slug }}</td>
                                        <td>{{ $section->url_link }}</td>
                                        <td>
                                            <a href="{{ route('admin.sections.edit', $section->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('admin.sections.destroy', $section->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No Results Found</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        {{ $sections->withQueryString()->links('pagination.default') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection