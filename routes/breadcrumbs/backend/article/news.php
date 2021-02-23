<?php

Breadcrumbs::for('admin.articles.news', function ($trail) {
    // $trail->push(__('menus.backend.access.roles.management'), route('admin.articles.news'));
    $trail->push('News Management', route('admin.articles.news'));
});

Breadcrumbs::for('admin.articles.news.create', function ($trail) {
    // $trail->push(__('menus.backend.access.roles.management'), route('admin.articles.news'));
    $trail->parent('admin.articles.news');
    $trail->push('Create News', route('admin.articles.news.create'));
});

Breadcrumbs::for('admin.articles.news.show', function ($trail, $news) {
    // $trail->push(__('menus.backend.access.roles.management'), route('admin.articles.news'));
    $trail->parent('admin.articles.news');
    $trail->push('View News', route('admin.articles.news.show', $news));
});

Breadcrumbs::for('admin.articles.news.edit', function ($trail, $news) {
    // $trail->push(__('menus.backend.access.roles.management'), route('admin.articles.news'));
    $trail->parent('admin.articles.news');
    $trail->push('Edit News', route('admin.articles.news.edit', $news));
});

Breadcrumbs::for('admin.articles.news.deleted', function ($trail) {
    // $trail->push(__('menus.backend.access.roles.management'), route('admin.articles.news'));
    $trail->parent('admin.articles.news');
    $trail->push('Deleted News', route('admin.articles.news.deleted'));
});
