@extends('backend.layouts.app')

{{-- @section('title', app_name() . ' | ' . __('labels.backend.access.users.management')) --}}
@section('title', app_name() . ' | Galery Management')

@section('breadcrumb-links')
    @include('backend.articles.galery.includes.breadcumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    Galery Management <small class="text-muted">All Galeries</small>
                </h4>
            </div><!--col-->

            <div class="col-sm-7">
                @include('backend.articles.galery.includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Type</th>
                            <th>Updated At</th>
                            <th>@lang('labels.general.actions')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($galeries as $galery)
                            <tr>
                                <td>{{ $galery->title }}</td>
                                <td>{{ $galery->slug }}</td>
                                <td>
                                    @switch($galery->type)
                                        @case('picture')
                                            <span class="badge badge-success"><i class="far fa-image mr-2"></i>Picture</span>
                                            @break
                                        @case('video')
                                            <span class="badge badge-success"><i class="far fa-file-video mr-2"></i>Video</span>
                                            @break
                                        @default
                                        {{ $galery->type }}
                                    @endswitch
                                </td>
                                <td>{{ $galery->updated_at->diffForHumans() }}</td>
                                <td class="btn-td">
                                    @include('backend.articles.galery.includes.actions', ['galery' => $galery])
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
                    {!! $galeries->total() !!} {{ trans_choice('Galeries', $galeries->total()) }}
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                    {!! $galeries->render() !!}
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection
