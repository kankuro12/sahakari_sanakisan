@extends('front.pages.app')
@section('b-items')
<li class="breadcrumb-item active" aria-current="page">Members</li>

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
    Members
@endsection
@section('pagecontent')
<div class="container-xxl py-5">
    <div class="container">
        @foreach ($teamTypes as $teamType)

            <div class="wow fadeInUp" data-wow-delay="0.1s" >
                <h3 class="text-center mb-5">{{$teamType->name}}</h3>
            </div>
            <div class="row">
                @foreach ($teams  as $team)

                    <div class="col-md-3">
                        <div class="card">

                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
@endsection
