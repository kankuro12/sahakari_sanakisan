@extends('front.pages.app')
@section('b-items')
    <li class="breadcrumb-item active" aria-current="page">

        हाम्रो बारेमा
    </li>
@endsection
@section('meta')
@endsection
@section('pagecss')
    <style>
        .about-image {
            background: #DEE1E6;
            border-radius: 5px;

        }

        .single-about {
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .short {
            box-shadow: 0px 0px 5px 0px rgba(63, 93, 246, 0.2);
        }

        .about-holder {
            display: block;
            color: black;
        }
    </style>
@endsection
@section('title')
    - हाम्रो बारेमा
@endsection
@section('b-title')
    हाम्रो बारेमा
@endsection
@section('pagecontent')
    <div class="container">
        @includeIf('front.pages.partials.about');
    </div>
@endsection

@section('pagejs')
@endsection
