@extends('front.pages.app')
@section('b-items')
<li class="breadcrumb-item active" aria-current="page">Services</li>

@endsection
@section('pagecss')
    <style>
        .service{
            border-radius:5px;
            display: block;
            color:black;
            margin-bottom:20px;
        }
        .service:hover *{
            color:#355EFC !important;
        }
        .service .img{
            border-radius: 5px;
            width:50px;
            height: 50px;
        }

        .service .desc{
            height: 3em; /* Adjust the height as needed to display 2 lines of text */
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            overflow: hidden;
            line-height: 1.5rem;
        }

    </style>
@endsection
@section('b-title')
    Services - {{$service->name}}
@endsection
@section('pagecontent')
    @includeIf('front.pages.partials.service')
@endsection
