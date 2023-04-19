@extends('front.pages.app')
@section('b-items')
    @php

    @endphp
    <li class="breadcrumb-item active" aria-current="page">
        <a href="{{ route('page.type',['type'=>'not']) }}">
            Notices
        </a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">{{ $notice->title }}</li>
@endsection
@section('meta')
    {!! createMeta($notice) !!}
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
@section('title')
- Notices - {{ $notice->title }}

@endsection
@section('b-title')
    Notices - {{ $notice->title }}
@endsection
@section('pagecontent')
    <div class="container">
        <div class="py-5">
            <div class="row">
                <div class="col-md-9 mb-4">
                    <h2>{{$notice->title}}</h2>
                    <hr>
                    @if (!empty($notice->desc))
                        {!! $notice->desc !!}
                        <hr>
                    @endif
                    @if ($uploads->count()>0)
                        <div>
                            <h5>
                                Downloads
                            </h5>
                            <div class="row">

                                    @foreach ($uploads as $upload)
                                        <div class="col-md-6">

                                            <a class="d-block text-dark"  href="{{asset($upload->file)}}" target="_blank">
                                                <div class="ps-2 mb-1 d-inline-block" >
                                                    {{$upload->title}} asdfasdfsd asdfasdf asdfasdf asdfasdf
                                                </div>
                                                <button class="btn btn-primary" style="border-radius: 30px;">
                                                    Download / View
                                                    <i class="bi ms-2 bi-cloud-arrow-down-fill"></i>

                                                </button>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('pagejs')

@endsection
