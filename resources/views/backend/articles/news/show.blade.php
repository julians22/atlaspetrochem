@extends('backend.layouts.app')

{{-- @section('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.create')) --}}
@section('title', 'News Management | View News')

@section('breadcrumb-links')
    @include('backend.articles.news.includes.breadcumb-links')
@endsection

@section('content')

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    News Management
                    <small class="text-muted">View News</small>
                </h4>
            </div>
        </div>

        <div class="row mt-4 mb-4">
            <div class="col">
                <table class="table table-borderless">
                    <tr>
                        <th>Tilte</th>
                        <td>{{ $news->title }}</td>
                    </tr>
                    <tr>
                        <th>Intro</th>
                        <td>{{ $news->intro }}</td>
                    </tr>
                    <tr>
                        <th>Content</th>
                        <td>{!! $news->value !!}</td>
                    </tr>
                    <tr>
                        <th>Thumbnail</th>
                        <td>
                            <div style="width: 400px">
                                <img src="{{ $news->thumb_location }}" alt="{{ $news->thumb_location }}" class="w-100">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>Featured Image</th>
                        <td>
                            <div style="width: 400px">
                                <img src="{{ $news->featured_image }}" alt="{{ $news->featured_image }}" class="w-100">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="card-footer">
        <div class="row">
            <div class="col">
                <small class="float-right text-muted">
                    <strong>Created At:</strong> {{ timezone()->convertToLocal($news->created_at) }} ({{ $news->created_at->diffForHumans() }}),
                    <strong>Updated At:</strong> {{ timezone()->convertToLocal($news->updated_at) }} ({{ $news->updated_at->diffForHumans() }})
                    @if($news->trashed())
                        <strong>Deleted At:</strong> {{ timezone()->convertToLocal($news->deleted_at) }} ({{ $news->deleted_at->diffForHumans() }})
                    @endif
                </small>
            </div><!--col-->
        </div><!--row-->
    </div>
</div>

@endsection
