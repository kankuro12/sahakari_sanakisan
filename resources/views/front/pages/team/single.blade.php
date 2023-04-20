@extends('front.pages.app')
@section('b-items')
<li class="breadcrumb-item " aria-current="page">
    <a href="{{route('team.type')}}">Members</a>
</li>
<li class="breadcrumb-item active" aria-current="page">
        {{$team->name}}
</li>


@endsection
@section('pagecss')
    <style>
        .team-image{
            background: #DEE1E6;
            border-radius: 5px;
       }
       .team-link a{
            color: #555555;
       }
    </style>
@endsection
@section('b-title')
    Members - {{$team->name}}
@endsection
@section('title')
   - Members - {{$team->name}}
@endsection
@section('meta')
    {!!createMetaTeam($team) !!}
@endsection
@section('pagecontent')
<div class="container-xxl py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-2 mb-3">
                <div class="team-image">
                    <img src="{{asset($team->image)}}" alt="" class="w-100">
                </div>
            </div>
            <div class="col-md-7">
                <h4>{{$team->name}}</h4>
                <h6>{{$team->designation}}</h6>
                @if (empty($team->desc))
                    @include('front.pages.team.info',['team'=>$team])
                @else
                    <div>{!! $team->desc !!}</div>
                @endif

            </div>
            <div class="col-md-3">
                @if (!empty($team->desc))
                    @include('front.pages.team.info',['team'=>$team])
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
