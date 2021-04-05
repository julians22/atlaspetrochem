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

Breadcrumbs::for('admin.slider.company', function ($trail) {
    $trail->push('Slider Company Management', route('admin.slider.company'));
});

Breadcrumbs::for('admin.slider.company.create', function ($trail) {
    $trail->parent('admin.slider.company');
    $trail->push('Create Company Slider', route('admin.slider.company.create'));
});

Breadcrumbs::for('admin.slider.company.edit', function ($trail, $company) {
    $trail->parent('admin.slider.company');
    $trail->push('Edit Company Slider', route('admin.slider.company.edit', $company));
});

Breadcrumbs::for('admin.slider.company.deleted', function ($trail) {
    $trail->parent('admin.slider.company');
    $trail->push('Edit Company Slider', route('admin.slider.company.deleted'));
});

Breadcrumbs::for('admin.slider.teams', function ($trail) {
    $trail->push('Slider Team Management', route('admin.slider.teams'));
});

Breadcrumbs::for('admin.slider.teams.create', function ($trail) {
    $trail->parent('admin.slider.teams');
    $trail->push('Create Team Slider', route('admin.slider.teams.create'));
});

Breadcrumbs::for('admin.slider.teams.edit', function ($trail, $teams) {
    $trail->parent('admin.slider.teams');
    $trail->push('Edit Team Slider', route('admin.slider.teams.edit', $teams));
});

Breadcrumbs::for('admin.slider.teams.deleted', function ($trail) {
    $trail->parent('admin.slider.teams');
    $trail->push('Deleted Team Slider', route('admin.slider.teams.deleted'));
});
