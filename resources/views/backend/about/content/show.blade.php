@extends('backend.layouts.app')

@section('title', __('About Content Management') . ' | ' . __('View About Content'))

@section('content')

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    About Content Management
                    <small class="text-muted">View About Content</small>
                </h4>
            </div>
        </div>

        <div class="row mt-4 mb-4">
            <div class="col">
                <table class="table table-borderless">
                    <tr>
                        <th>Title</th>
                        <td>{{ $content->title }}</td>
                    </tr>
                    <tr>
                        <th>Content</th>
                        <td>{!! $content->content !!}</td>
                    </tr>
                    <tr>
                        <th>Thumbnail Text</th>
                        <td>{{ $content->thumb_text }}</td>
                    </tr>
                    <tr>
                        <th>Thumbnail Image</th>
                        <td>
                            <div style="max-width: 350px;">
                                <img src="{{ $content->thumb_location }}" alt="{{ $content->title }}" class="w-full">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>Featured Image</th>
                        <td>
                            <div style="max-width: 400px;">
                                <img src="{{ $content->featured_image_location }}" alt="{{ $content->title }}" class="w-full">
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
                    <strong>Created At:</strong> {{ timezone()->convertToLocal($content->created_at) }} ({{ $content->created_at->diffForHumans() }}),
                    <strong>Updated At:</strong> {{ timezone()->convertToLocal($content->updated_at) }} ({{ $content->updated_at->diffForHumans() }})
                </small>
            </div><!--col-->
        </div><!--row-->
    </div>
</div>

@endsection
