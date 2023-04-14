@extends('front.layout.app')
@section('content')
    @includeIf('front.pages.home.slider')
    @includeIf('front.pages.home.about')
    @includeIf('front.pages.home.facts')
    @includeIf('front.pages.home.features')
@endsection
