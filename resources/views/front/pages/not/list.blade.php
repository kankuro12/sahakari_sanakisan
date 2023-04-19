@extends('front.pages.app')
@section('b-items')
    @php

    @endphp
    <li class="breadcrumb-item active" aria-current="page">
        Notices
    </li>
@endsection
@section('meta')
@endsection
@section('pagecss')
    <style>
        .top-section {
            /* box-shadow: 0px 0px 8px 0px rgba(0, 0, 0, 0.1); */
        }

        .notice-wapper {
            /* height:500px; */
            /* height: 100%; */
        }

        .notice-links {
            font-weight: 500;
        }

        .notice-title {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;

        }

        @media(max-width:425px) {
            .notice-wapper {
                height: auto;
            }

            .top-section {
                box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.1);
            }

            .notice-title {
                white-space: normal;
                overflow: visible;
                text-overflow: clip;

            }

        }
    </style>
@endsection
@section('title')
    - Notices
@endsection
@section('b-title')
    Notices
@endsection
@section('pagecontent')
    <div class="container">
        <div class="notice-wapper">
            @foreach ($notices as $notice)
                <div style="border:1px solid #DEE2FB;border-radius:5px;margin:5px 15px 10px 15px;padding:15px;">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="notice-title">
                            {{ $notice->title }}
                        </h5>

                    </div>
                    <div class="row ">
                        <span class="col-md-6 d-none d-md-block">
                            <small>
                                <b>
                                    {{ makeDate($notice->created_at) }}
                                </b>
                            </small>
                            {{-- <a class="notice-links" href="ds">Download  Fils<i class="bi bi-cloud-arrow-down ms-2"></i></a> --}}
                        </span>
                        <span class="col-md-6 text-end">
                            <a class="notice-links" href="{{ route('page', ['id' => $notice->id]) }}">View Detail <i
                                    class="bi bi-arrow-right-circle-fill ms-2"></i></a>
                        </span>
                    </div>
                </div>
            @endforeach

            @if ($notices->lastPage()>1)
                <div class="d-flex justify-content-center">

                    <!-- Display the pagination links using Bootstrap 5 -->
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <!-- Previous Page Link -->
                            <li class="page-item{{ $notices->currentPage() == 1 ? ' disabled' : '' }}">
                                <a class="page-link" href="{{ $notices->previousPageUrl() }}" tabindex="-1"
                                    aria-disabled="{{ $notices->currentPage() == 1 ? 'true' : 'false' }}">Prev</a>
                            </li>

                            <!-- Pagination Links -->
                            @for ($i = 1; $i <= $notices->lastPage(); $i++)
                                <li class="page-item{{ $notices->currentPage() == $i ? ' active' : '' }}">
                                    <a class="page-link" href="{{ $notices->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor

                            <!-- Next Page Link -->
                            <li class="page-item{{ $notices->currentPage() == $notices->lastPage() ? ' disabled' : '' }}">
                                <a class="page-link" href="{{ $notices->nextPageUrl() }}"
                                    aria-disabled="{{ $notices->currentPage() == $notices->lastPage() ? 'true' : 'false' }}">Next</a>
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
