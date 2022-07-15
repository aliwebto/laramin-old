@extends('layouts.panel.auth.login')
@section('content')
    <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">ایمیل</label>
            <input type="text" class="form-control text-start @error('email') is-invalid @enderror"
                   autofocus dir="ltr" id="email" name="email"
                   placeholder="ایمیل خود را وارد کنید">
            <x-error for="email"/>
        </div>
        <div class="mb-3 form-password-toggle">
            @if (\Illuminate\Support\Facades\Route::has('password.request'))
                <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">رمز عبور</label>
                    <a href="{{ route('password.request') }}">
                        <small>رمز عبور را فراموش کردید؟</small>
                    </a>
                </div>
            @endif
            <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control text-start @error('password') is-invalid @enderror" dir="ltr"
                       name="password" placeholder="············" aria-describedby="password">
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                <x-error for="password"/>
            </div>
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember" name="remember">
                <label class="form-check-label" for="remember"> به خاطر سپاری </label>
            </div>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary d-grid w-100" type="submit">ورود</button>
        </div>
    </form>
@endsection
