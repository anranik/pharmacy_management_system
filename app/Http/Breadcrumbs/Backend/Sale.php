<?php

Breadcrumbs::register('admin.sales.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.sales.management'), route('admin.sales.index'));
});

Breadcrumbs::register('admin.sales.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.sales.index');
    $breadcrumbs->push(trans('menus.backend.sales.create'), route('admin.sales.create'));
});

Breadcrumbs::register('admin.sales.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.sales.index');
    $breadcrumbs->push(trans('menus.backend.sales.edit'), route('admin.sales.edit', $id));
});
