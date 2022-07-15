@extends('layouts.panel.verticalLayout')
@section('content')
    {!! \Diglactic\Breadcrumbs\Breadcrumbs::render('dashboard.account.general') !!}
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                    <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> حساب</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages-account-settings-security.html"><i class="bx bx-lock-alt me-1"></i> امنیت</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages-account-settings-billing.html"><i class="bx bx-detail me-1"></i> صورتحساب و پلن‌ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages-account-settings-notifications.html"><i class="bx bx-bell me-1"></i> اعلان‌ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages-account-settings-connections.html"><i class="bx bx-link-alt me-1"></i> اتصالات</a>
                </li>
            </ul>
            <livewire:dashboard.account.general />
            <livewire:dashboard.account.delete-account />
        </div>
    </div>

@endsection
