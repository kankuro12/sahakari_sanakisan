@extends('front.pages.app')
@section('b-items')
    @php

    @endphp
    <li class="breadcrumb-item " aria-current="page">
        <a href="{{ route('gallery.type') }}">
            Galleries
        </a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">
        {{ $type->name }}
    </li>
@endsection
@section('meta')
@endsection
@section('pagecss')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

    <style>
        .singlegallery {
            background: #f0f1fc;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .singlegallery .overlay {
            position: absolute;
            top: 0px;
            bottom: 0px;
            left: 0px;
            right: 0px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 0, 0.2);
            color: white;
            font-weight: 600;
            font-size: 20px;
            display: none;
        }

        .singlegallery:hover .overlay {
            display: flex;
        }
    </style>
@endsection
@section('title')
    - Gallery - {{ $type->name }}
@endsection
@section('b-title')
    Gallery - {{ $type->name }}
@endsection
@section('pagecontent')
    <div class="container">
        <div class="row">
            @foreach ($images as $image)
                <div class="col-md-3 mb-3">
                    <a class="singlegallery" href="{{ asset($image->file) }}" data-fancybox="gallery">
                        <img src="{{ asset($image->thumb) }}" />
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@section('pagejs')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
        $(document).ready(function() {
            Fancybox.bind('[data-fancybox="gallery"]', {});
        });
    </script>
@endsection
