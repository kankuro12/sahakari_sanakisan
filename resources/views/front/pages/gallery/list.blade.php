@extends('front.pages.app')
@section('b-items')
    @php

    @endphp
    <li class="breadcrumb-item active" aria-current="page">
        Gallery
    </li>
@endsection
@section('meta')
@endsection
@section('pagecss')
    <style>
        .singlegallery{
            background: #f0f1fc;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }

        .singlegallery .overlay{
            position: absolute;
            top:0px;
            bottom:0px;
            left:0px;
            right:0px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 0, 0.2);
            color:white;
            font-weight: 600;
            font-size: 20px;
            display: none;
        }

        .singlegallery:hover .overlay{
            display: flex;
        }

    </style>
@endsection
@section('title')
    - Gallery
@endsection
@section('b-title')
    Gallery
@endsection
@section('pagecontent')
    <div class="container">
        <div class="row">
            @foreach ($galleries as $gallery)
                <a class="col-md-3 col-6 " href="{{route('gallery',['id'=>$gallery->id])}}">
                    <div class="singlegallery">

                        <img class="w-100" src="{{asset($gallery->icon)}}" alt="">
                        <div class="overlay">
                            asdf
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
