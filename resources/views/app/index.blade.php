@extends('layouts.app')

@section('body_content')
    <!-- Begin Hero Content -->
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                <h1>Lorem Ipsum</h1>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <button class="btn btn-primary">Read More</button>
            </div>
        </div>
    </div>
    <!-- End Hero Content -->

    <!-- Begin Featured Talent -->
    <div class="featured-talent">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-sm-10 offset-sm-1">
                    <h1 class="text-center mb-5">Featured Talent</h1>
                    <div class="row">
                        <div class="col-sm-2">
                            qwdqwd
                        </div>
                        <div class="col-sm-2">
                            qwdqwd
                        </div>
                        <div class="col-sm-2">
                            qwdqwd
                        </div>
                        <div class="col-sm-2">
                            qwdqwd
                        </div>
                        <div class="col-sm-2">
                            qwdqwd
                        </div>
                        <div class="col-sm-2">
                            qwdqwd
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <a href="#" class="btn btn-primary">View More</a>
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
                    <h2>Lorem Ipsum</h2>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.
                    </p>
                    <h2>Twitter Feed</h2>
                    <div class="twitter-feed-container">
                        <div class="twitter-feed-item">
                            <div class="twitter-image"></div>
                            <div class="twitter-content">
                                <div class="title"></div>
                                <div class="description"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h2 class="text-center">Get In Touch</h2>
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
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Keep Connected -->
@endsection