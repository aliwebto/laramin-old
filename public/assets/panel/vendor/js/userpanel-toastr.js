let toastConfig = {
    maxOpened: 1,
    autoDismiss: !0,
    closeButton: false,
    debug: false,
    newestOnTop: false,
    progressBar: true,
    positionClass: "toast-bottom-right",
    preventDuplicates: false,
    onclick: null,
    rtl: true,
    showDuration: 300,
    hideDuration: 1000,
    timeOut: 5000,

}
Livewire.on('toastSuccess', (text) => {
    toastr.success(text, 'عملیات موفق',toastConfig )
})

Livewire.on('toastError', (text) => {
    toastr.error(text, 'خطا',toastConfig)
})
