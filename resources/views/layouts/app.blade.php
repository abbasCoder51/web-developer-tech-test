@extends('layouts.base')

@push("styles")
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
@endpush

@section('body')
    @include('partials.navbar')

    @yield('body_content')

    @include('partials.footer')
@endsection