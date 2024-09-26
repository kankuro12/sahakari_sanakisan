@extends('admin.layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('admin/plugins/drophify/css/dropify.min.css') }}">
    <style>
        .col-md-3 {
            margin-bottom: 10px;
        }

        label {
            font-weight: 600;
            font-size: 1.1rem;
            color: black;
            margin-top: 5px;
        }

        .form-control,
        .tox {
            border-radius: 5px !important;
        }

    </style>
@endsection
@section('page-option')
@endsection
@section('s-title')
    <li class="breadcrumb-item active">
        PDFS
    </li>
@endsection
@section('content')
    <div class="bg-white shadow mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <form class="p-2 shadow" action="{{route('admin.setting.gallery.pdf.add')}}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" name="date" id="date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="mode">Mode</label>
                            <select name="mode" id="mode" class="form-control">
                                <option value="public">Public</option>
                                <option value="private">Private</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pdf">Pdf</label>
                            <input type="file" name="pdf" id="pdf" class="form-control photo" accept="application/pdf "  required>
                        </div>
                        <div class="py-2">
                            <button class="btn btn-primary">Add PDF </button>
                        </div>
                    </form>
                </div>
                @foreach ($pdfs as $pdf)
                <div class="col-md-4">
                    <form class="shadow p-2" action="{{ route('admin.setting.gallery.pdf.edit', ['pdf' => $pdf->id]) }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" value="{{ $pdf->title }}" id="title" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" name="date" value="{{ $pdf->date }}" id="date" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="mode">Mode</label>
                            <select name="mode" id="mode" class="form-control">
                                <option value="public" {{ $pdf->mode == 'public' ? 'selected' : '' }}>Public</option>
                                <option value="private" {{ $pdf->mode == 'private' ? 'selected' : '' }}>Private</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="pdf">PDF</label>
                            <input type="file" name="pdf" id="pdf" class="form-control photo" accept="application/pdf" data-default-file="{{asset($pdf->pdf)}}">
                        </div>

                        <div class="py-2 d-flex justify-content-between">
                            <button class="btn btn-secondary">Update PDF</button>
                            <a onclick="return prompt('Enter yes To Continue.')=='yes';" href="{{route('admin.setting.gallery.pdf.del',['pdf'=>$pdf->id])}}" class="btn btn-danger">Del</a>
                        </div>
                    </form>
                </div>
            @endforeach
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('admin/plugins/drophify/js/dropify.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.photo').dropify();
        });
    </script>
@endsection
