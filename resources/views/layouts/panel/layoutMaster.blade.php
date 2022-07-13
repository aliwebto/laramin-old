@include((( config('panel.setting.myLayout') === 'horizontal')
? 'layouts.panel.horizontalLayout' : // horizontal
    (( config('panel.setting.myLayout') === 'blank')
        ? 'layouts.panel.blankLayout'  // blank
        : 'layouts.panel.verticalLayout'
    ))// vertical
)
