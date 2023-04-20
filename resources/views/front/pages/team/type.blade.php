@extends('front.pages.app')
@section('b-items')
<li class="breadcrumb-item active" aria-current="page">Members</li>

@endsection
@section('pagecss')
    <style>
       .team-holder{

       }
       .team-holder .team{
        display: block;
        color: black;
         box-shadow: 0px 0px 10px 0px #355EFC54;border-radius:5px;overflow:hidden;
       }

       .team-holder .team .image{
        background: #DEE1E6;
       }

       .team-holder .team .name{

       }


       @media(max-width:425px){
            .team-holder{
                padding: 0px 5px !important;
            }

            .team-holder .team{
                box-shadow: 0px 0px 5px 0px #355EFC54;
            }
       }

    </style>
@endsection
@section('b-title')
    Members
@endsection
@section('pagecontent')
<div class="container-xxl py-5">
    <div class="container">
        @include('front.pages.partials.team')
    </div>
</div>
@endsection
