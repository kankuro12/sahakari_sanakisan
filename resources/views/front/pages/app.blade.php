@extends('front.layout.app')
@section('css')
    @yield('pagecss')
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s"
        style="background-image: url('{{ asset('uploads/header.jpg') }}') !important">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown single-line">@yield('b-title')</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    @yield('b-items')
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container">
        @yield('pagecontent')
    </div>
@endsection

@section('js')
    @yield('pagejs')
@endsection
