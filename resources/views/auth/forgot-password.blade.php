@extends('layouts.panel.auth.forgot')
@section('content')
    <form id="formAuthentication" class="mb-3 fv-plugins-bootstrap5 fv-plugins-framework"
          action="{{ route('password.email') }}" method="POST">
        @csrf
        <div class="mb-3 fv-plugins-icon-container">
            <div class="form-group">
                <label for="email" class="form-label">ایمیل</label>
                <input type="text" class="form-control text-start @error('email') is-invalid @enderror" dir="ltr" id="email" name="email"
                       placeholder="ایمیل خود را وارد کنید" autofocus="" value="{{ old('email') }}">
                <x-error for="email" />
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
        </div>
        <button class="btn btn-primary d-grid w-100">ارسال لینک بازنشانی</button>
    </form>
@endsection
