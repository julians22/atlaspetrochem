<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.career', function ($trail) {
    $trail->push( 'Career Management', route('admin.career'));
});

Breadcrumbs::for('admin.career.show', function ($trail, $career) {
    $trail->parent('admin.career');
    $trail->push( 'View Career', route('admin.career.show', $career));
});

Breadcrumbs::for('admin.career.edit', function ($trail, $career) {
    $trail->parent('admin.career');
    $trail->push( 'Edit Career', route('admin.career.edit', $career));
});

Breadcrumbs::for('admin.career.create', function ($trail) {
    $trail->parent('admin.career');
    $trail->push( 'Create Career', route('admin.career.create'));
});

require __DIR__.'/slider.php';
require __DIR__.'/article.php';
require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
