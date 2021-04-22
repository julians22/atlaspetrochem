<?php

Breadcrumbs::for('admin.articles.galery', function ($trail) {
    // $trail->push(__('menus.backend.access.roles.management'), route('admin.articles.news'));
    $trail->push('Galery Management', route('admin.articles.galery'));
});

Breadcrumbs::for('admin.articles.galery.create', function ($trail) {
    $trail->parent('admin.articles.galery');
    $trail->push('Create Galery', route('admin.articles.galery.create'));
});

Breadcrumbs::for('admin.articles.galery.show', function ($trail, $galery) {
    $trail->parent('admin.articles.galery');
    $trail->push('View Galery', route('admin.articles.galery.show', $galery));
});

Breadcrumbs::for('admin.articles.galery.edit', function ($trail, $galery) {
    $trail->parent('admin.articles.galery');
    $trail->push('Edit Galery', route('admin.articles.galery.edit', $galery));
});
