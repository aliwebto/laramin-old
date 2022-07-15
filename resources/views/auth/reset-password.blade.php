@extends('layouts.panel.auth.reset')
@section('content')
    <h4 class="mb-2">بازنشانی رمز عبور</h4>
    <form id="formAuthentication" class="mb-3 fv-plugins-bootstrap5 fv-plugins-framework"
          action="{{ route('password.update') }}" method="POST" novalidate="novalidate">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <div class="mb-3">
            <label for="email" class="form-label">ایمیل</label>
            <input type="text" class="form-control text-start @error('email') is-invalid @enderror"
                   autofocus dir="ltr" id="email" name="email"
                   placeholder="ایمیل خود را وارد کنید" value="{{ old('email') }}">
            <x-error for="email"/>
        </div>

        <div class="mb-3 form-password-toggle fv-plugins-icon-container">
            <label class="form-label" for="password">رمز عبور جدید</label>
            <div class="input-group input-group-merge has-validation">
                <input type="password" id="password"
                       class="form-control text-start @error('password') is-invalid @enderror" dir="ltr" name="password"
                       placeholder="············" aria-describedby="password">
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                <x-error for="password"/>
            </div>
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        <div class="mb-3 form-password-toggle fv-plugins-icon-container">
            <label class="form-label" for="confirm-password">تایید رمز عبور</label>
            <div class="input-group input-group-merge has-validation">
                <input type="password" id="confirm-password"
                       class="form-control @error('password') is-invalid @enderror" name="password_confirmation"
                       placeholder="············" aria-describedby="password">
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                <x-error for="password"/>
            </div>
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        <button class="btn btn-primary d-grid w-100 mb-3">تنظیم رمز عبور جدید</button>
        <div class="text-center">
            <a href="{{ route('login') }}">
                <i class="bx bx-chevron-left scaleX-n1-rtl"></i>
                بازگشت به ورود
            </a>
        </div>
    </form>
@endsection
