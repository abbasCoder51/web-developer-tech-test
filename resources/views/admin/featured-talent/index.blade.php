@extends('layouts.admin')

@section('title', 'Featured Talents')

@section('body_content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
        <h1 class="h3 mb-0 text-gray-800">Featured Talents</h1>
        <a href="{{ route('admin.featured-talents.create') }}"
           class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Create Featured Talent</a>
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
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Job Category</th>
                                    <th>Employment Type</th>
                                    <th>Skill</th>
                                    <th>Years Experience</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @forelse($featuredTalents as $talent)
                                        <tr role="row">
                                            <td>{{ $talent->name }}</td>
                                            <td>{{ $talent->location }}</td>
                                            <td>{{ $talent->job_category }}</td>
                                            <td>{{ $talent->employment_type }}</td>
                                            <td>{{ $talent->skill }}</td>
                                            <td>{{ $talent->years_experience }}</td>
                                            <td>
                                                <a href="{{ route('admin.featured-talents.edit', $talent->id) }}" class="btn btn-primary">Edit</a>
                                                <form action="{{ route('admin.featured-talents.destroy', $talent->id) }}" method="POST" class="d-inline">
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
                        {{ $featuredTalents->withQueryString()->links('pagination.default') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection