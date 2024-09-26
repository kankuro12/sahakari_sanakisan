@extends('front.pages.app')
@section('b-items')
    @php

    @endphp
    <li class="breadcrumb-item active" aria-current="page">
        PDF
    </li>
@endsection
@section('meta')
@endsection
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
@endsection
@section('title')
    - PDF
@endsection
@section('b-title')
    PDF
@endsection
@section('pagecontent')
    <div class="container">
        @includeIf('front.pages.partials.pdfgalleries')
    </div>
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
@endsection
