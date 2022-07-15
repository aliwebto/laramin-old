<!-- BEGIN: Theme CSS-->

<link rel="stylesheet" href="{{ asset(mix('assets/panel/vendor/fonts/boxicons.css')) }}" />
<link rel="stylesheet" href="{{ asset(mix('assets/panel/vendor/fonts/fontawesome.css')) }}" />
<link rel="stylesheet" href="{{ asset(mix('assets/panel/vendor/fonts/flag-icons.css')) }}" />

<!-- Core CSS -->
<link rel="stylesheet" href="{{ asset(mix('assets/panel/vendor/css' . (config('panel.setting.myRTLMode') ? '/rtl' : '') . '/core' .(config('panel.setting.myStyle') !== 'light' ? '-' . config('panel.setting.myStyle') : '') .'.css')) }}" class="{{ config('panel.setting.hasCustomizer') ? 'template-customizer-core-css' : '' }}" />
<link rel="stylesheet" href="{{ asset(mix('assets/panel/vendor/css' . (config('panel.setting.myRTLMode') ? '/rtl' : '')  .'/' .config('panel.setting.myTheme') .(config('panel.setting.myStyle') !== 'light' ? '-' . config('panel.setting.myStyle') : '') .'.css')) }}" class="{{ config('panel.setting.hasCustomizer') ? 'template-customizer-theme-css' : '' }}" />
<link rel="stylesheet" href="{{ asset(mix('assets/panel/css/demo.css')) }}" />


<link rel="stylesheet" href="{{ asset(mix('assets/panel/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')) }}" />
<link rel="stylesheet" href="{{ asset(mix('assets/panel/vendor/libs/typeahead-js/typeahead.css')) }}" />
<link rel="stylesheet" href="{{ asset(mix('assets/panel/vendor/libs/toastr/toastr.css')) }}">
<!-- Vendor Styles -->
@yield('vendor-style')


<!-- Page Styles -->
@yield('page-style')




















<!-- Icons -->
<link rel="stylesheet" href="../../assets/panel/vendor/fonts/boxicons.css">
<link rel="stylesheet" href="../../assets/panel/vendor/fonts/fontawesome.css">
<link rel="stylesheet" href="../../assets/panel/vendor/fonts/flag-icons.css">

<!-- Core CSS -->
<link rel="stylesheet" href="../../assets/panel/vendor/css/rtl/core.css" class="template-customizer-core-css">
<link rel="stylesheet" href="../../assets/panel/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css">
<link rel="stylesheet" href="../../assets/panel/css/demo.css">
<link rel="stylesheet" href="../../assets/panel/vendor/css/rtl/rtl.css">

<!-- Vendors CSS -->
<link rel="stylesheet" href="../../assets/panel/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
<link rel="stylesheet" href="../../assets/panel/vendor/libs/typeahead-js/typeahead.css">
<link rel="stylesheet" href="../../assets/panel/vendor/libs/apex-charts/apex-charts.css">

