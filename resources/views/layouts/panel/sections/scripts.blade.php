<!-- BEGIN: Vendor JS-->
<script src="{{ asset(mix('assets/panel/vendor/libs/jquery/jquery.js')) }}"></script>
<script src="{{ asset(mix('assets/panel/vendor/libs/popper/popper.js')) }}"></script>
<script src="{{ asset(mix('assets/panel/vendor/js/bootstrap.js')) }}"></script>
<script src="{{ asset(mix('assets/panel/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')) }}"></script>
<script src="{{ asset(mix('assets/panel/vendor/libs/hammer/hammer.js')) }}"></script>
<script src="{{ asset(mix('assets/panel/vendor/libs/i18n/i18n.js')) }}"></script>
<script src="{{ asset(mix('assets/panel/vendor/libs/typeahead-js/typeahead.js')) }}"></script>
<script src="{{ asset(mix('assets/panel/vendor/js/menu.js')) }}"></script>
<script src="{{ asset(mix('assets/panel/vendor/libs/toastr/toastr.js')) }}"></script>
<script src="{{ asset(mix('assets/panel/vendor/js/userpanel-toastr.js')) }}"></script>
@yield('vendor-script')
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="{{ asset(mix('assets/panel/js/main.js')) }}"></script>

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
@stack('pricing-script')
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
@yield('page-script')
<!-- END: Page JS-->
