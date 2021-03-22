@extends('layouts.app')

@push('scripts_top')
    <script type="text/javascript" src="{{ asset("js/app.js") }}"></script>
@endpush

@section('body_content')
    <!-- Begin Hero Content -->
    <div class="hero-content">
        <div class="container pt-5 pb-5">
            <div class="row">
                @if($sectionHomeHero)
                    <div class="col-sm-10 offset-sm-1">
                        <h1 class="text-uppercase">{{ $sectionHomeHero->title }}</h1>
                        <p>{{ $sectionHomeHero->description }}</p>
                        @if($sectionHomeHero->url_link)
                            <a href="{{ $sectionHomeHero->url_link }}" class="btn btn-normal text-uppercase">Read More</a>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- End Hero Content -->

    <!-- Begin Featured Talent -->
    <div class="featured-talent">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-sm-10 offset-sm-1">
                    <h1 class="text-center text-uppercase text-uppercase mb-5">Featured Talent</h1>
                    <div class="row">
                        <div class="col-lg-2 col-sm-6">
                            <div class="featured-talent-item"></div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="featured-talent-item"></div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="featured-talent-item"></div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="featured-talent-item"></div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="featured-talent-item"></div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="featured-talent-item"></div>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <a href="{{ route('talent') }}" class="btn btn-normal text-uppercase">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Featured Talent -->

    <!-- Begin Keep Connected -->
    <div class="keep-connected">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-sm-6">
                    @if($sectionHomeConnected)
                        <h2 class="text-uppercase">{{ $sectionHomeConnected->title }}</h2>
                        <p>{{ $sectionHomeConnected->description }}</p>
                    @endif
                    <h2 class="text-uppercase">Twitter Feed</h2>
                    <div id="twitter-feed-container"></div>
                </div>
                <div class="col-sm-6">
                    <h2 class="text-center text-uppercase">Get In Touch</h2>
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Telephone">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-inverse text-uppercase w-100">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Keep Connected -->

    <div class="d-none">
        <div id="twitter-feed-item-template" class="twitter-feed-item">
            <div class="twitter-image-item-container">
                <div class="twitter-image-item"><img src="" alt=""></div>
            </div>
            <div class="twitter-content-item">
                <div class="twitter-content-container">
                    <div class="twitter-name-tag-name-item">
                        <div class="twitter-name-item"></div>
                        <div class="twitter-tag-name-item"></div>
                    </div>
                    <div class="twitter-date-item"></div>
                </div>
                <div class="twitter-description-item"></div>
            </div>
        </div>
    </div>
@endsection