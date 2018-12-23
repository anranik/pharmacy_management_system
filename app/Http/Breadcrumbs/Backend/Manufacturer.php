<?php

Breadcrumbs::register('admin.manufacturers.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.manufacturers.management'), route('admin.manufacturers.index'));
});

Breadcrumbs::register('admin.manufacturers.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.manufacturers.index');
    $breadcrumbs->push(trans('menus.backend.manufacturers.create'), route('admin.manufacturers.create'));
});

Breadcrumbs::register('admin.manufacturers.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.manufacturers.index');
    $breadcrumbs->push(trans('menus.backend.manufacturers.edit'), route('admin.manufacturers.edit', $id));
});
