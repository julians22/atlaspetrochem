<?php

Breadcrumbs::for('admin.slider.banner', function ($trail) {
    $trail->push('Slider Banner Management', route('admin.slider.banner'));
});

Breadcrumbs::for('admin.slider.banner.create', function ($trail) {
    $trail->parent('admin.slider.banner');
    $trail->push('Create Slider Banner', route('admin.slider.banner.create'));
});

Breadcrumbs::for('admin.slider.banner.edit', function ($trail, $banner) {
    $trail->parent('admin.slider.banner');
    $trail->push('Edit Slider Banner', route('admin.slider.banner.edit', ['banner' => $banner]));
});