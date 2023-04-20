@extends('front.layout.app')
@section('meta')
@endsection
@section('content')
    @includeIf('front.pages.home.slider')

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


    <div class="container">

        <div class="row my-5">

            <div class="col-md-8 mb-3">
                @includeIf('front.pages.home.notice')
            </div>
            <div class="col-md-4 mb-3">
                @includeIf('front.pages.home.board')

            </div>
        </div>
    </div>
    @includeIf('front.pages.home.service')
    @includeIf('front.pages.home.about')
    @includeIf('front.pages.home.facts')
    @includeIf('front.pages.home.features')
@endsection
