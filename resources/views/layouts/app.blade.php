@extends('layouts.base')

@push("styles")
    <link rel="stylesheet" href="{{ asset("css/style.css") }}?v=1">
@endpush

@section('body')
    @include('partials.navbar')

    @yield('body_content')

    @include('partials.footer')
@endsection