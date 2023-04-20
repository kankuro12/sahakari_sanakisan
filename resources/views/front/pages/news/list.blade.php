@extends('front.pages.app')
@section('b-items')
    @php

    @endphp
    <li class="breadcrumb-item active" aria-current="page">
        News
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
</style>
@endsection
@section('title')
    - News
@endsection
@section('b-title')
    News
@endsection
@section('pagecontent')
    <div class="container">
        <div class="notice-wapper">
            <div>
                <div class="row">
                    @foreach ($news as $n)
                        <div class="col-md-4 mb-4">
                            <a class="home-news" href="{{route('page',['id'=>$n->id])}}">
                                <div class="image mb-2">
                                    <img class="h-100" src="{{ asset($n->image) }}" alt="">
                                </div>
                                <h5 class="single-line mb-1">
                                    {{ $n->title }}
                                </h5>
                                <div class="two-line">
                                    {{ $n->short_desc }}
                                </div>

                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            @if ($news->lastPage()>1)
                <div class="d-flex justify-content-center">

                    <!-- Display the pagination links using Bootstrap 5 -->
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <!-- Previous Page Link -->
                            <li class="page-item{{ $news->currentPage() == 1 ? ' disabled' : '' }}">
                                <a class="page-link" href="{{ $news->previousPageUrl() }}" tabindex="-1"
                                    aria-disabled="{{ $news->currentPage() == 1 ? 'true' : 'false' }}">Prev</a>
                            </li>

                            <!-- Pagination Links -->
                            @for ($i = 1; $i <= $news->lastPage(); $i++)
                                <li class="page-item{{ $news->currentPage() == $i ? ' active' : '' }}">
                                    <a class="page-link" href="{{ $news->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor

                            <!-- Next Page Link -->
                            <li class="page-item{{ $news->currentPage() == $news->lastPage() ? ' disabled' : '' }}">
                                <a class="page-link" href="{{ $news->nextPageUrl() }}"
                                    aria-disabled="{{ $news->currentPage() == $news->lastPage() ? 'true' : 'false' }}">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            @endif
        </div>
    </div>
@endsection

@section('pagejs')
@endsection
