@extends('layouts.app')

@section('body_content')
    <!-- Begin Featured Talent Content -->
    <div class="featured-talent-hero-content">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <h1 class="text-uppercase text-center">Talent</h1>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Content -->

    <!-- Begin Featured Talent -->
    <div class="featured-talent-content">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-sm-10 offset-sm-1">
                    <h1 class="text-center text-uppercase text-uppercase mb-5">Featured Talent</h1>
                    <div class="row">
                        <div class="col-sm-2">
                            Search Filter
                        </div>
                        <div class="col-sm-10">
                            <form id="featured-talent-form" class="featured-talent-form" action="">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <select class="form-control" name="location">
                                                <option value="">Location</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <select class="form-control" name="job_category">
                                                <option value="">Role</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <select class="form-control" name="employment_type">
                                                <option value="">Employment Type</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <select class="form-control" name="skill">
                                                <option value="">Skill</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <select class="form-control" name="years_experience">
                                                <option value="">Years Experience</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-sm-10 offset-sm-1">
                    @forelse($featuredTalents as $talent)
                        <div class="featured-talent-item">
                            <div class="featured-talent-image">
                                <img src="{{ asset($talent->image) }}">
                            </div>
                            <div class="featured-talent-content">
                                <h1 class="featured-talent-title">{{ $talent->name }}</h1>
                                <p class="featured-talent-description">
                                    {{ $talent->description }}
                                </p>
                                <a class="featured-talent-url-link" href="{{ $talent->url_link }}">Read More ></a>
                            </div>
                        </div>
                    @empty
                        <div class="text-center">No Results</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <!-- End Featured Talent -->
@endsection