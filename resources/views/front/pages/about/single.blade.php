@extends('front.pages.app')
@section('b-items')
    <li class="breadcrumb-item " aria-current="page">
        <a href="{{ route('page.type', ['type' => 'about']) }}">
            About Us
        </a>

    </li>
    <li class="breadcrumb-item active" aria-current="page">
        {{ $about->title }}
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
        .about-holder {
            display: block;
            color: black;
        }
    </style>
@endsection
@section('title')
    - About Us - {{ $about->title }}
@endsection
@section('b-title')
    About Us - {{ $about->title }}
@endsection
@section('pagecontent')
    <div class="container">
        <div class="row pb-5">
            <div class="col-md-3">
                <div class="about-image mb-3">
                    <img src="{{ asset($about->image) }}" alt="" class="w-100">
                </div>
            </div>
            <div class="col-md-9">
                <h4 class="text-md-start text-center mb-3">
                    {{ $about->title }}
                </h4>
                @if (!empty($about->short_desc))
                    <div class="short mb-3 p-3 text-justify">
                        {{ $about->short_desc }}
                    </div>
                @endif

                @if (!empty($about->desc))
                    <div class="mb-3 text-justify">
                        {!! $about->desc !!}
                    </div>
                @endif

            </div>
        </div>
    </div>
    @endsection

    @section('pagejs')
    @endsection
