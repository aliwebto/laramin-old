<?php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('dashboard.account', function (BreadcrumbTrail $trail) {
    $trail->push('تنظیمات حساب',url('/'));
});
Breadcrumbs::for('dashboard.account.general', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard.account');
    $trail->push('عمومی', route('dashboard.account.general'));
});
