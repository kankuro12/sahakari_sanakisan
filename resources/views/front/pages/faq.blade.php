@extends('front.pages.app')
@section('b-items')
    @php

    @endphp
    <li class="breadcrumb-item active" aria-current="page">
        FAQ
    </li>
@endsection
@section('meta')
@endsection
@section('pagecss')
    <style>
        .singlefaq{
            background: #f0f1fc;
            border-radius: 5px;
            overflow: hidden;
        }

    </style>
@endsection
@section('title')
    - FAQ
@endsection
@section('b-title')
    FAQ
@endsection
@section('pagecontent')
    @includeIf('front.pages.partials.faq')
@endsection
