@extends('layouts.base')

@push("styles")
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
@endpush

@section('body')
    @include('partials.navbar')

    @include('partials.footer')
@endsection