<?php

Breadcrumbs::register('admin.medicines.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.medicines.management'), route('admin.medicines.index'));
});

Breadcrumbs::register('admin.medicines.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.medicines.index');
    $breadcrumbs->push(trans('menus.backend.medicines.create'), route('admin.medicines.create'));
});

Breadcrumbs::register('admin.medicines.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.medicines.index');
    $breadcrumbs->push(trans('menus.backend.medicines.edit'), route('admin.medicines.edit', $id));
});
