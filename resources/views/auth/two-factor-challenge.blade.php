@extends('layouts.panel.auth.two-factor-challenge')
@section('content')
    <section id="codeMode">
        @if($errors->any())
        @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif
        <p class="text-start mb-4">
            لطفا کدی که از اپلیکیشن google authenticator دریافت کرده اید را در اینجا وارد کنید.
            {{--                <span class="fw-bold d-block mt-2">******1234</span>--}}
        </p>
        <p class="mb-0 fw-semibold">کد 6 رقمی امنیتی را وارد کنید</p>
        <form id="twoStepsForm" action="{{ route('two-factor.login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <div class="auth-input-wrapper d-flex align-items-center justify-content-sm-between numeral-mask-wrapper">
                    <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" autofocus>
                    <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1">
                    <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1">
                    <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1">
                    <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1">
                    <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1">
                </div>
                <!-- Create a hidden field which is combined by 3 fields above -->
                <input type="hidden" name="code">
            </div>
            <button class="btn btn-primary d-grid w-100 mb-2" type="submit">تایید حساب</button>
            <button class="btn btn-outline-primary w-100 mb-3" type="button" id="recoveryModeOn">استفاده از کد بازیابی</button>

            {{-- <div class="text-center">
                 کد را دریافت نکردید؟
                 <a href="javascript:void(0);"> ارسال دوباره </a>
             </div>--}}
        </form>
    </section>

    <section id="recoveryMode" style="display:none;">
        <p class="text-start mb-4">
            لطفا کد بازیابی خود را وارد کنید
            {{--                <span class="fw-bold d-block mt-2">******1234</span>--}}
        </p>
        <form id="twoStepsForm" action="{{ route('two-factor.login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <div class="mb-3">
                    <label for="recovery_code" class="form-label">کد بازیابی</label>
                    <input type="text" class="form-control text-start @error('recovery_code') is-invalid @enderror"
                           autofocus dir="ltr" id="email" name="recovery_code"
                           placeholder="کد بازیابی خود را وارد کنید" value="{{ old('recovery_code') }}">
                    <x-error for="recovery_code"/>
                </div>
                <!-- Create a hidden field which is combined by 3 fields above -->
            </div>
            <button class="btn btn-primary d-grid w-100 mb-2" type="submit">تایید حساب</button>
            <button class="btn btn-outline-primary w-100 mb-3" type="button" id="codeModeOn">استفاده از کد تایید</button>
            {{-- <div class="text-center">
                 کد را دریافت نکردید؟
                 <a href="javascript:void(0);"> ارسال دوباره </a>
             </div>--}}
        </form>
    </section>

@endsection
@push('page-js')
    <script src="{{ asset('assets/panel/js/pages-auth-two-steps.js') }}"></script>
    <script>
        function codeMode() {
            $('#recoveryMode').slideUp(100);
            $('input[name=recovery_code]').val('');
            setTimeout($('#codeMode').slideDown(200), 200);

        }

        function recoveryMode() {
            $('#codeMode').slideUp(100);
            $('input[name=code]').val('');
            $('#codeMode .auth-input').val('');
            setTimeout($('#recoveryMode').slideDown(200), 200);
        }

        document.getElementById('recoveryModeOn').addEventListener('click', () => {
            recoveryMode();
        })
        document.getElementById('codeModeOn').addEventListener('click', () => {
            codeMode();
        })
    </script>
@endpush
