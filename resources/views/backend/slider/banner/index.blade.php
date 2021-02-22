@extends('backend.layouts.app')

{{-- @section('title', app_name() . ' | ' . __('labels.backend.access.users.management')) --}}
@section('title', app_name() . ' | Slider Banner')

{{-- @section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection --}}

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{-- {{ __('labels.backend.access.users.management') }} <small class="text-muted">{{ __('labels.backend.access.users.active') }}</small> --}}
                    Slider Banner Management <small class="text-muted">Active Banner</small>
                </h4>
            </div><!--col-->

            <div class="col-sm-7">
                @include('backend.slider.banner.includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>@lang('labels.general.actions')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($banners as $banner)
                            <tr>
                                <td>
                                    <div style="width: 200px">
                                        <img src="{{ $banner->getImageAttribute() }}" alt="{{ Str::slug($banner->title) }}" class="w-100"> 
                                    </div>
                                </td>
                                <td>{{ $banner->title }}</td>
                                <td>{{ $banner->description }}</td>
                                <td>{{ $banner->created_at->diffForHumans() }}</td>
                                <td>{{ $banner->updated_at->diffForHumans() }}</td>
                                <td>
                                    <div class="btn-group" role="group" >
                                        <a href="{{ route('admin.slider.banner.edit', $banner) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.edit')">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <a href="" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.delete')">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!--col-->
        </div><!--row-->
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    {!! $banners->total() !!} total banner
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                    {!! $banners->render() !!}
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection
