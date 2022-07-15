@extends('layouts.panel.auth.confirm')
@section('content')
    <form id="formPasswordConfirm" class="mb-3 fv-plugins-bootstrap5 fv-plugins-framework"
          action="{{ route('password.confirm') }}" method="POST">
        @csrf
        <div class="mb-3 fv-plugins-icon-container">
            <div class="form-group">
                <label for="password" class="form-label">رمز عبور</label>
                <input type="password" class="form-control text-start @error('password') is-invalid @enderror" dir="ltr" id="password" name="password"
                       placeholder="رمز عبور خود را وارد کنید" autofocus="" value="{{ old('email') }}">
                <x-error for="password" />
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
        </div>
        <button class="btn btn-primary d-grid w-100">تایید</button>
    </form>
@endsection
