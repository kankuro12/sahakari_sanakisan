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

    @php
        $notices=DB::table('pages')->where('type','not')->get(['id','title','created_at']);
        $members=DB::table('teams')->where('team_type_id',env('board',1))->get(['id','image','designation','name']);
    @endphp
    <div class="container">

        <div class="row my-5">

            <div class="col-md-8 mb-3">
                <div class="top-section">

                    <h3 class="p-3">
                        <div>
                            Recent Notices
                        </div>
                    </h3>
                    <div class="notice-wapper">
                        @foreach ($notices as $notice)

                        <div style="border:1px solid #DEE2FB;border-radius:5px;margin:5px 15px 10px 15px;padding:15px;">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="notice-title">
                                    {{$notice->title}}
                                </h5>

                            </div>
                            <div class="row ">
                                <span class="col-md-6 d-none d-md-block">
                                    <small>
                                        <b>
                                            {{makeDate($notice->created_at)}}
                                        </b>
                                    </small>
                                    {{-- <a class="notice-links" href="ds">Download  Fils<i class="bi bi-cloud-arrow-down ms-2"></i></a> --}}
                                </span>
                                <span class="col-md-6 text-end">
                                    <a class="notice-links" href="{{route('page',['id'=>$notice->id])}}">View Detail <i
                                            class="bi bi-arrow-right-circle-fill ms-2"></i></a>
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="top-section">
                    <h3 class="p-3">Board Members</h3>
                    <div class="notice-wapper">
                        <div class="row">
                            @for ($i = 0; $i < 4; $i++)
                                <div class="col-md-6 mb-3">
                                    <div class="card">
                                        <img src="http://localhost:8000/uploads/service/RJRBGSfc5QaWEZDbpVj15QwM2yy8aXleta5NUMsK.jpg"
                                            alt="" class="w-100">
                                        <div class="p-2">
                                            <b>
                                                name
                                            </b> <br>
                                            designation
                                        </div>
                                    </div>
                                </div>
                            @endfor

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @includeIf('front.pages.home.service')
    @includeIf('front.pages.home.about')
    @includeIf('front.pages.home.facts')
    @includeIf('front.pages.home.features')
@endsection
