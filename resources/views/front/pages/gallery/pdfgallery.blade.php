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
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.7/css/dataTables.dataTables.css" />
@endsection
@section('title')
    - PDF
@endsection
@section('b-title')
    PDF
@endsection
@section('pagecontent')
    <div class="container p-2">
        @includeIf('front.pages.partials.pdfgalleries')
    </div>
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
@endsection
