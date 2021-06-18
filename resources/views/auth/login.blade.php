

@extends('layouts.frontend.authmaster')

@section('content')

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group">
        <label class="mb-1 text-white"><strong>Email</strong></label>
        <input type="email" class="form-control" required name="email">
    </div>
    <div class="form-group">
        <label class="mb-1 text-white"><strong>Password</strong></label>
        <input type="password" class="form-control" name="password" required>
    </div>
    <div class="form-row d-flex justify-content-between mt-4 mb-2">
        <div class="form-group">
           <div class="custom-control custom-checkbox ml-1 text-white">
                <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
                <label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
            </div>
        </div>
        <div class="form-group">
            <a class="text-white" href="page-forgot-password.html">Forgot Password?</a>
        </div>
    </div>
    <div class="text-center">
        <button type="submit" class="btn bg-white text-primary btn-block">Sign Me In</button>
    </div>
</form>
@endsection
