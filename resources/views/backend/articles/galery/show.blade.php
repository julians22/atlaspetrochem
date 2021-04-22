@extends('backend.layouts.app')

{{-- @section('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.create')) --}}
@section('title', 'Galery Management | View Galery')

@section('breadcrumb-links')
    @include('backend.articles.news.includes.breadcumb-links')
@endsection

@section('content')

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    Galery Management
                    <small class="text-muted">View Galery</small>
                </h4>
            </div>
        </div>

        <div class="row mt-4 mb-4">
            <div class="col">
                <table class="table table-borderless">
                    <tr>
                        <th>Tilte</th>
                        <td>{{ $galery->title }}</td>
                    </tr>
                    <tr>
                        <th>Type</th>
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
                    </tr>

                    @if ($galery->type == 'picture')
                        <tr>
                            <th>Featured Image</th>
                            <td>
                                <div style="width: 400px">
                                    <img src="{{ $galery->image_location }}" alt="{{ $galery->image_location }}" class="w-100">
                                </div>
                            </td>
                        </tr>
                    @else

                    @if ($galery->youtube)
                        <tr>
                            <th>Youtube</th>
                            <td>
                                <div style="width: 500px">
                                    <iframe src="//www.youtube.com/embed/{{$galery->video_url}}" style="width: 100%; height: 400px" frameborder="0" allowfullscreen  controls></iframe>
                                </div>
                            </td>
                        </tr>

                    @else
                        <tr>
                            <th>Video</th>
                            <td>
                                <div style="width: 400px">
                                    <video src="{{ $galery->video_url }}" controls class="w-100"></video>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Thumbnail Image</th>
                            <td>
                                <div style="width: 400px">
                                    <img src="{{ $galery->thumbnail_location }}" alt="{{ $galery->thumbnail_location }}" class="w-100">
                                </div>
                            </td>
                        </tr>
                    @endif
                    @endif
                </table>
            </div>
        </div>
    </div>

    <div class="card-footer">
        <div class="row">
            <div class="col">
                <small class="float-right text-muted">
                    <strong>Created At:</strong> {{ timezone()->convertToLocal($galery->created_at) }} ({{ $galery->created_at->diffForHumans() }}),
                    <strong>Updated At:</strong> {{ timezone()->convertToLocal($galery->updated_at) }} ({{ $galery->updated_at->diffForHumans() }})
                    @if($galery->trashed())
                        <strong>Deleted At:</strong> {{ timezone()->convertToLocal($galery->deleted_at) }} ({{ $galery->deleted_at->diffForHumans() }})
                    @endif
                </small>
            </div><!--col-->
        </div><!--row-->
    </div>
</div>

@endsection
