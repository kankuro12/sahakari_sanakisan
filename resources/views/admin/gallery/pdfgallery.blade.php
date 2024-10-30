@extends('admin.layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('admin/plugins/drophify/css/dropify.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
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
        Downloads
    </li>
@endsection
@section('content')
    <div class="bg-white shadow mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <form class="p-2 shadow" action="{{ route('admin.setting.gallery.pdf.add') }}"
                        enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="text" name="date" id="date" class="form-control calender" required>
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
                            <input type="file" name="pdf" id="pdf" class="form-control photo"
                                accept="application/pdf " required>
                        </div>
                        <div class="py-2">
                            <button class="btn btn-primary">Add PDF </button>
                        </div>
                    </form>
                </div>

                <div class="col-md-8">
                    <table id="pdf-table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Mode</th>
                                <th>PDF</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pdfs as $pdf)
                                <tr id="pdf-{{ $pdf->id }}">
                                    <td>{{ $pdf->title }}</td>
                                    <td>{{ $pdf->date }}</td>
                                    <td>{{ ($pdf->mode) }}</td>
                                    <td>
                                        <a href="{{ asset($pdf->pdf) }}" target="_blank">View Document</a>
                                    </td>
                                    <td>
                                        {{-- <form class="d-inline" action="{{ route('admin.setting.gallery.pdf.edit', ['pdf' => $pdf->id]) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <button class="btn btn-secondary">Update</button>
                                        </form> --}}
                                        <a onclick="return prompt('Enter yes To Continue.')=='yes';"
                                            href="{{ route('admin.setting.gallery.pdf.del', ['pdf' => $pdf->id]) }}"
                                            class="btn btn-danger">Del</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('admin/plugins/drophify/js/dropify.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.photo').dropify();
            $('#pdf-table').DataTable();
        });
    </script>
    @include('admin.layout.datepicker');
@endsection
