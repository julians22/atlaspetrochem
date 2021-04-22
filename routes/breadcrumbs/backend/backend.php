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

Breadcrumbs::for('admin.product.main-category.index', function ($trail) {
    $trail->push( 'Main Category Management', route('admin.product.main-category.index'));
});

Breadcrumbs::for('admin.product.main-category.edit', function ($trail, $category) {
    $trail->parent('admin.product.main-category.index');
    $trail->push('Edit Main Category', route('admin.product.main-category.edit', $category));
});

Breadcrumbs::for('admin.product.main-category.show', function ($trail, $category) {
    $trail->parent('admin.product.main-category.index');
    $trail->push('Edit Main Category', route('admin.product.main-category.show', $category));
});

Breadcrumbs::for('admin.product.category.index', function ($trail) {
    $trail->push( 'Sub Category Management', route('admin.product.category.index'));
});

Breadcrumbs::for('admin.product.category.create', function ($trail) {
    $trail->parent('admin.product.category.index');
    $trail->push( 'Create Sub Category', route('admin.product.category.create'));
});

Breadcrumbs::for('admin.product.category.show', function ($trail, $category) {
    $trail->parent('admin.product.category.index');
    $trail->push( 'View Sub Category', route('admin.product.category.show', $category));
});

Breadcrumbs::for('admin.product.category.edit', function ($trail, $category) {
    $trail->parent('admin.product.category.index');
    $trail->push( 'Edit Sub Category', route('admin.product.category.edit', $category));
});

Breadcrumbs::for('admin.product.index', function ($trail) {
    $trail->push( 'Product Management', route('admin.product.index'));
});

Breadcrumbs::for('admin.product.create', function ($trail) {
    $trail->parent('admin.product.index');
    $trail->push( 'Create Product', route('admin.product.create'));
});

Breadcrumbs::for('admin.product.show', function ($trail, $product) {
    $trail->parent('admin.product.index');
    $trail->push( 'View Product', route('admin.product.show', $product));
});

Breadcrumbs::for('admin.product.edit', function ($trail, $product) {
    $trail->parent('admin.product.index');
    $trail->push( 'Edit Product', route('admin.product.edit', $product));
});


// company content
Breadcrumbs::for('admin.content.company.index', function ($trail) {
    $trail->push( 'Company Content Management', route('admin.content.company.index'));
});

// about content
Breadcrumbs::for('admin.content.about.index', function ($trail) {
    $trail->push( 'About Content Management', route('admin.content.about.index'));
});

Breadcrumbs::for('admin.content.about.edit', function ($trail, $content) {
    $trail->parent('admin.content.about.index');
    $trail->push( 'Edit About Content', route('admin.content.about.edit', $content));
});

Breadcrumbs::for('admin.content.about.show', function ($trail, $content) {
    $trail->parent('admin.content.about.index');
    $trail->push( 'Show About Content', route('admin.content.about.show', $content));
});

// Website Setting
Breadcrumbs::for('admin.setting.index', function ($trail) {
    $trail->push( 'Website Setting', route('admin.setting.index'));
});

// Banner Per Pages
Breadcrumbs::for('admin.banner.index', function ($trail){
    $trail->push('Banner Per Page Management', route('admin.banner.index'));
});

Breadcrumbs::for('admin.banner.edit', function ($trail, $bannerPerPage){
    $trail->parent('admin.banner.index');
    $trail->push('Edit Banner Per Page', route('admin.banner.edit', $bannerPerPage));
});


require __DIR__.'/slider.php';
require __DIR__.'/article.php';
require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
