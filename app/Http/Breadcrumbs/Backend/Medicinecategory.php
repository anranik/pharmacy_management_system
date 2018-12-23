<?php

Breadcrumbs::register('admin.medicinecategories.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.medicinecategories.management'), route('admin.medicinecategories.index'));
});

Breadcrumbs::register('admin.medicinecategories.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.medicinecategories.index');
    $breadcrumbs->push(trans('menus.backend.medicinecategories.create'), route('admin.medicinecategories.create'));
});

Breadcrumbs::register('admin.medicinecategories.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.medicinecategories.index');
    $breadcrumbs->push(trans('menus.backend.medicinecategories.edit'), route('admin.medicinecategories.edit', $id));
});
