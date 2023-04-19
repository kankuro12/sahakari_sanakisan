@extends('front.pages.app')
@section('b-items')
    @php

    @endphp
    <li class="breadcrumb-item active" aria-current="page">
        <a href="{{ route('service.types') }}">
            Services
        </a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">{{ $service->name }}</li>
@endsection
@section('pagecss')
    <style>
        .service {
            border-radius: 5px;
            display: block;
            color: black;
            margin-bottom: 20px;
        }

        .service:hover * {
            color: #355EFC !important;
        }

        .service .img {
            border-radius: 5px;
            width: 50px;
            height: 50px;
        }

        .service .desc {
            height: 3em;
            /* Adjust the height as needed to display 2 lines of text */
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            overflow: hidden;
            line-height: 1.5rem;
        }

        .service-detail{

        }


        @media(max-width:425px){
            .service-title{
                text-align: center;
            }

            .similar{
                text-align: center;
            }
        }
    </style>
@endsection
@section('b-title')
    Services - {{ $service->name }}
@endsection
@section('title')
    Services - {{ $service->name }}

@endsection
@section('pagecontent')
    <div>
        <div class="row">
            <div class="col-md-2">
                <img src="{{ asset($service->logo) }}" alt="" class="w-100">
            </div>
            <div class="col-md-7 mt-3 service-detail">
                <h2 class="service-title"> {{$service->name}}</h2>
                {!! $service->desc !!}
            </div>

            <div class="col-md-3">
                <h4 class="similar">
                    Similar Services
                </h4>

                @foreach ($services->where('id', '!=', $service->id) as $ser)
                        <a class="shadow p-3 service" href="{{route('service.single',['service'=>$ser->id])}}">

                            <div>
                                <img src="{{asset($ser->logo)}}"
                                    alt="" class="img">
                            </div>
                            <h4 class="name mt-3">
                                {{$ser->name}}
                            </h4>
                            <p class="desc mb-3">
                                {{$ser->short_desc}}
                            </p>
                        </a>
                </div>
                @endforeach
        </div>
    </div>
@endsection
