@extends('layouts.panel.auth.register')
@section('content')
    <form id="formAuthentication" class="mb-3"  method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">نام</label>
            <input type="text" class="form-control text-start @error('name') is-invalid @enderror" dir="rtl" id="name" name="name"
                   placeholder="نام خود را وارد کنید" autofocus>
            <x-error for="name" />
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">ایمیل</label>
            <input type="text" class="form-control text-start @error('email') is-invalid @enderror" dir="ltr" id="email" name="email"
                   placeholder="ایمیل خود را وارد کنید">
            <x-error for="email" />
        </div>
        <div class="mb-3 form-password-toggle">
            <label class="form-label" for="password">رمز عبور</label>
            <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control text-start @error('password') is-invalid @enderror" dir="ltr"
                       name="password" placeholder="············" aria-describedby="password">
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
            </div>
            <x-error for="password" />
        </div>

        @if(\Laravel\Jetstream\Features::hasTermsAndPrivacyPolicyFeature())
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input  @error('terms') is-invalid @enderror" type="checkbox" id="terms-conditions" name="terms">
                    <label class="form-check-label" for="terms-conditions">
                        من موافقم با
                        <a href="javascript:void(0);">سیاست حریم خصوصی و قوانین</a>
                    </label>
                    <x-error for="terms" />

                </div>
            </div>
        @endif

        <button class="btn btn-primary d-grid w-100">عضویت</button>
    </form>
@endsection
