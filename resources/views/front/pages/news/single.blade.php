@extends('front.pages.app')
@section('b-items')
    @php

    @endphp
    <li class="breadcrumb-item " aria-current="page">
        <a href="{{route('page.type',['type'=>'news'])}}">
            News
        </a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">
        {{$news->title}}
    </li>
@endsection
@section('meta')
@endsection
@section('pagecss')
<style>
        .home-news{
            display: block;
            color:black;
        }
        .home-news .image {
            height: 200px;
            background: #DFE2FA;
            display: flex;
            border-radius: 5px;
            align-items: center;
            justify-content: center;
        }

    .image {
        height:  300px;
        background: #DFE2FA;
        display: flex;
        border-radius: 5px;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }
</style>
@endsection
@section('title')
    - News - {{$news->title}}
@endsection
@section('b-title')
    News - {{$news->title}}
@endsection
@section('pagecontent')
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <h2 class="mb-4 text-center text-md-start">
                    {{$news->title}}
                </h2>

                <div class="image mb-3 ">
                    <img src="{{asset($news->image)}}" class="h-100" alt="">
                </div>
                <div>
                    {!! $news->desc !!}
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <h2 class="mb-4 text-center text-md-start">
                    Latest News
                </h2>
                @foreach (getLatestNews($news->id) as $n)
                    @include('front.pages.news.other',['n'=>$n])
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('pagejs')
@endsection
