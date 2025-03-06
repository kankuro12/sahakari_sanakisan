@extends('front.pages.app')
@section('b-items')
    @php

    @endphp
    <li class="breadcrumb-item active" aria-current="page">
        हाम्रो सम्पर्क
    </li>
@endsection
@section('meta')
@endsection
@section('pagecss')
@endsection
@section('title')
    -
    हाम्रो सम्पर्क
@endsection
@section('b-title')
    हाम्रो सम्पर्क
@endsection
@section('pagecontent')
    @includeIf('front.pages.partials.contact')
@endsection
