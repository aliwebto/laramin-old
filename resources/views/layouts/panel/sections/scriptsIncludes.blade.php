<!-- laravel style -->
<script src="{{ asset('assets/panel/vendor/js/helpers.js') }}"></script>
<!-- beautify ignore:start -->
@if (config('panel.setting.hasCustomizer'))
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('assets/panel/vendor/js/template-customizer.js') }}"></script>
@endif

<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{{ asset('assets/panel/js/config.js') }}"></script>

@if (config('panel.setting.hasCustomizer'))
    <script>
        window.templateCustomizer = new TemplateCustomizer({
            cssPath: '',
            themesPath: '',
            defaultShowDropdownOnHover: {{ config('panel.setting.showDropdownOnHover') }}, // true/false (for horizontal layout only)
            displayCustomizer: {{config('panel.setting.displayCustomizer')}},
            lang: '{{ app()->getLocale() }}',
            pathResolver: function (path) {
                var resolvedPaths = {
                    // Core stylesheets
                    @foreach (['core'] as $name)
                    '{{ $name }}.css': '{{ asset(mix("assets/panel/vendor/css". (config('panel.setting.myRTLSupport') ? '/rtl' : '') ."/{$name}.css")) }}',
                    '{{ $name }}-dark.css': '{{ asset(mix("assets/panel/vendor/css". (config('panel.setting.myRTLSupport') ? '/rtl' : '') ."/{$name}-dark.css")) }}',
                    @endforeach

                    // Themes
                    @foreach (['default', 'bordered', 'semi-dark'] as $name)
                    'theme-{{ $name }}.css': '{{ asset(mix("assets/panel/vendor/css". (config('panel.setting.myRTLSupport') ? '/rtl' : '') ."/theme-{$name}.css")) }}',
                    'theme-{{ $name }}-dark.css':
                        '{{ asset(mix("assets/panel/vendor/css". (config('panel.setting.myRTLSupport') ? '/rtl' : '') ."/theme-{$name}-dark.css")) }}',
                    @endforeach
                }
                return resolvedPaths[path] || path;
            },
            'controls': <?php echo json_encode(config('panel.setting.customizerControls')) ?>,
        });
    </script>
@endif
<!-- beautify ignore:end -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');

</script>
