@extends('layouts.app')

@section('title', 'Talent')

@section('body_content')
    <!-- Begin Featured Talent Content -->
    <div class="featured-talent-hero-content">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    @if($sectionTalentHero)
                        <h1 class="text-uppercase text-center">{{ $sectionTalentHero->title }}</h1>
                        <p>{{ $sectionTalentHero->description }}</p>
                    @endif
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
                        <div class="col-md-12 col-lg-2 search-filter-title d-flex justify-content-center pb-3">
                            Search Filter
                        </div>
                        <div class="col-md-12 col-lg-10 featured-talent-search-container">
                            <form id="featured-talent-form" class="featured-talent-form" action="">
                                <div class="row">
                                    <div class="col-2">
                                        <label for="location">Location</label>
                                        <div class="form-group">
                                            <select class="form-control" name="location">
                                                <option value="">All</option>
                                                @foreach($locations as $name)
                                                    <option value="{{ $name }}">{{ $name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label for="role">Role</label>
                                            <select class="form-control" name="job_category">
                                                <option value="">All</option>
                                                @foreach($jobCategories as $name)
                                                    <option value="{{ $name }}">{{ $name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="employment_type">Contract</label>
                                            <select class="form-control" name="employment_type">
                                                <option value="">All</option>
                                                @foreach($employmentTypes as $name)
                                                    <option value="{{ $name }}">{{ $name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label for="skill">Skill</label>
                                            <select class="form-control" name="skill">
                                                <option value="">All</option>
                                                @foreach($skills as $name)
                                                    <option value="{{ $name }}">{{ $name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="years_experience">Experience</label>
                                            <select class="form-control" name="years_experience">
                                                <option value="">All</option>
                                                <option value="1">1+ Years</option>
                                                <option value="2">2+ Years</option>
                                                <option value="3">3+ Years</option>
                                                <option value="4">4+ Years</option>
                                                <option value="5">5+ Years</option>
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
                <div id="featured-talent-container" class="col-sm-12">
                    @forelse($featuredTalents as $talent)
                        <div class="featured-talent-item">
                            <div class="featured-talent-image">
                                <img src="{{ asset($talent->image) }}">
                            </div>
                            <div class="featured-talent-content">
                                <h3 class="featured-talent-title">{{ $talent->name }}</h3>
                                <p class="featured-talent-description">
                                    {{ $talent->description }}
                                </p>
                                <a class="featured-talent-url-link" href="{{ $talent->url_link }}">Read More ></a>
                            </div>
                        </div>
                    @empty
                        <div class="text-center">No Results Found</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <!-- End Featured Talent -->

    <!-- Begin Featured Talent Template -->
    <div class="d-none">
        <div id="featured-talent-item-template" class="featured-talent-item">
            <div class="featured-talent-image">
                <img src="">
            </div>
            <div class="featured-talent-content">
                <h1 class="featured-talent-title"></h1>
                <p class="featured-talent-description"></p>
                <a class="featured-talent-url-link" href="">Read More ></a>
            </div>
        </div>
    </div>
    <!-- End Featured Talent Template -->
@endsection

@push('scripts_bottom')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#featured-talent-form").on("change", function() {
                $.ajax({
                    url: "{{ route('talent') }}",
                    data: $(this).serialize(),
                    success: function (result) {
                        var featuredTalentContainer = $("#featured-talent-container");
                        featuredTalentContainer.empty();
                        if(result.data.length > 0) {
                            result.data.forEach(function(talent) {
                                var featuredTalentItem = $("#featured-talent-item-template").clone().removeAttr("id");
                                featuredTalentItem.find(".featured-talent-image").find("img").attr("src", talent["image"]);
                                featuredTalentItem.find(".featured-talent-content .featured-talent-title").html(talent["name"]);
                                featuredTalentItem.find(".featured-talent-content .featured-talent-description").html(talent["description"]);
                                featuredTalentItem.find(".featured-talent-content .featured-talent-url-link").attr("href", talent["url_link"]);
                                featuredTalentContainer.append(featuredTalentItem);
                            });
                        } else {
                            featuredTalentContainer.html("<div class='text-center'>No Results Found</div>");
                        }
                    }
                });
            });
        });
    </script>
@endpush