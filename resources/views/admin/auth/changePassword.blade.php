@extends('admin.layout.app')
@section('content')
    <div class="bg-white shadow p-3">

        <form action="{{ route('admin.change.password') }}" method="POST">
            @csrf
            <div class="row align-items-center mb-2">
                <div class="col-3 text-right">

                    <label for="current_password">Current Password:</label>
                </div>
                <div class="col-3">
                    <input class="form-control" type="password" name="current_password" required>
                    @error('current_password')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row align-items-center mb-2">
                <div class="col-3 text-right">

                    <label for="password">New Password:</label>
                </div>
                <div class="col-3">
                    <input class="form-control" type="password" name="password" required>
                    @error('password')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row align-items-center mb-2">
                <div class="col-3 text-right">
                    <label for="password_confirmation">Confirm New Password:</label>
                </div>
                <div class="col-3">
                    <input class="form-control" type="password" name="password_confirmation" required>
                    @error('password_confirmation')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3 text-right">
                    <button type="submit" class="btn btn-primary w-100">Change Password</button>
                    @if(session('message'))
                        <br>
                        <div style="color: green;">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
            </div>
        </form>
    </div>
@endsection
