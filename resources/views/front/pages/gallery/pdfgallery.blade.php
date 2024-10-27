@extends('front.pages.app')
@section('b-items')
    @php

    @endphp
    <li class="breadcrumb-item active" aria-current="page">
        Downloads
    </li>
@endsection
@section('meta')
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@endsection
@section('title')
    - Downloads
@endsection
@section('b-title')
    Downloads
@endsection
@section('pagecontent')
    @includeIf('front.pages.partials.pdfgalleries')
@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#pdfTable').DataTable();
        });
    </script>
@endsection
