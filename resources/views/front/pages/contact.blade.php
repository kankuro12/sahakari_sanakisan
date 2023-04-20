@extends('front.pages.app')
@section('b-items')
    @php

    @endphp
    <li class="breadcrumb-item active" aria-current="page">
        Contact Us
    </li>
@endsection
@section('meta')
@endsection
@section('pagecss')

@endsection
@section('title')
    - Contact Us
@endsection
@section('b-title')
    Contact Us
@endsection
@section('pagecontent')

    @includeIf('front.pages.partials.contact')
@endsection
