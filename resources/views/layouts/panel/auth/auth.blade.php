<!DOCTYPE html>
<html lang="fa" class="light-style customizer-hide" dir="rtl" data-theme="theme-default"
      data-assets-path="{{ asset('assets/panel/') }}" data-template="vertical-menu-template">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>ثبت نام پایه - صفحات | فرست - قالب مدیریت بوت‌استرپ</title>

    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/panel/img/favicon/favicon.ico') }}">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/fonts/boxicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/fonts/flag-icons.css') }}">

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/css/rtl/core.css') }}"
          class="template-customizer-core-css">
    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/css/rtl/theme-default.css') }}"
          class="template-customizer-theme-css">
    <link rel="stylesheet" href="{{ asset('assets/panel/css/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/css/rtl/rtl.css') }}">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/libs/typeahead-js/typeahead.css') }}">
    <!-- Vendor -->
    <link rel="stylesheet"
          href="{{ asset('assets/panel/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}">

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/panel/vendor/css/pages/page-auth.css') }}">
    <!-- Helpers -->
    <script src="{{ asset('assets/panel/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('assets/panel/js/config.js') }}"></script>
</head>

<body>
<!-- Content -->

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
           {!! $slot !!}
        </div>
    </div>
</div>

<!-- / Content -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('assets/panel/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets/panel/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets/panel/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/panel/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

<script src="{{ asset('assets/panel/vendor/libs/hammer/hammer.js') }}"></script>

<script src="{{ asset('assets/panel/vendor/libs/i18n/i18n.js') }}"></script>
<script src="{{ asset('assets/panel/vendor/libs/typeahead-js/typeahead.js') }}"></script>

<script src="{{ asset('assets/panel/vendor/js/menu.js') }}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('assets/panel/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
<script src="{{ asset('assets/panel/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/panel/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/panel/js/main.js') }}"></script>

<!-- Page JS -->
<script src="{{ asset('assets/panel/js/pages-auth.js') }}"></script>
@stack('page-js')
</body>
</html>
