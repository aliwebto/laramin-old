@extends('layouts.panel.auth.verify-email')
@section('content')

    <p class="text-start">
        لینک فعال‌سازی حساب به ایمیل شما ارسال شد:<br>{{ auth()->user()->email }}<br> لطفا لینک ارسال شده را برای ادامه دنبال
        کنید.
    </p>
    <p class="text-center">
        ایمیل را دریافت نکردید؟
        <a href="#" onclick="event.preventDefault();document.getElementById('reSendCodeForm').submit()">ارسال دوباره</a>
    </p>
    <form method="POST" action="{{ route('verification.send') }}" id="reSendCodeForm">
        @csrf
    </form>
@endsection
