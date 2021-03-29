<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.faqs', function ($trail) {
    $trail->push( 'Faqs Management', route('admin.faqs'));
});

Breadcrumbs::for('admin.faq.create', function ($trail) {
    $trail->parent('admin.faqs');
    $trail->push(__('labels.backend.faqs.create'), route('admin.faq.create'));
});

Breadcrumbs::for('admin.faq.show', function ($trail, $faq) {
    $trail->parent('admin.faqs');
    $trail->push( 'View Faq', route('admin.faq.show', $faq));
});

Breadcrumbs::for('admin.faq.edit', function ($trail, $faq) {
    $trail->parent('admin.faqs');
    $trail->push( 'Edit Faq', route('admin.faq.edit', $faq));
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

Breadcrumbs::for('admin.product.category.index', function ($trail) {
    $trail->push( 'Category Management', route('admin.product.category.index'));
});

Breadcrumbs::for('admin.product.category.show', function ($trail, $category) {
    $trail->parent('admin.product.category.index');
    $trail->push( 'View Category', route('admin.product.category.show', $category));
});

Breadcrumbs::for('admin.product.category.edit', function ($trail, $category) {
    $trail->parent('admin.product.category.index');
    $trail->push( 'View Category', route('admin.product.category.edit', $category));
});

Breadcrumbs::for('admin.product.index', function ($trail) {
    $trail->push( 'Product Management', route('admin.product.index'));
});

Breadcrumbs::for('admin.product.show', function ($trail, $product) {
    $trail->parent('admin.product.index');
    $trail->push( 'View Product', route('admin.product.show', $product));
});

Breadcrumbs::for('admin.product.edit', function ($trail, $product) {
    $trail->parent('admin.product.index');
    $trail->push( 'Edit Product', route('admin.product.edit', $product));
});


require __DIR__.'/slider.php';
require __DIR__.'/article.php';
require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
