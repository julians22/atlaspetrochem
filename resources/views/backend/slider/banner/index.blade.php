@extends('backend.layouts.app')

{{-- @section('title', app_name() . ' | ' . __('labels.backend.access.users.management')) --}}
@section('title', app_name() . ' | Slider Home')

@section('breadcrumb-links')
    @include('backend.slider.banner.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{-- {{ __('labels.backend.access.users.management') }} <small class="text-muted">{{ __('labels.backend.access.users.active') }}</small> --}}
                    Slider Home Management <small class="text-muted">Active Slider</small>
                </h4>
            </div><!--col-->

            <div class="col-sm-7">
                @include('backend.slider.banner.includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        @livewire('backend.slider.home-slider-component')
    </div><!--card-body-->
</div><!--card-->
@endsection
