@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('Banner Pages Management'))

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        Banner Pages Management
                    </h4>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Pages</th>
                                <th>Image</th>
                                <th>Last Update</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($bannerPerPages as $banner)
                                <tr>
                                    <td>{{ $banner->key }}</td>
                                    <td>
                                        @if ($banner->image_location_desktop)
                                            <div style="width: 425px">
                                                <img src="{{ $banner->image_location_desktop }}" alt="" class="img-thumbnail">
                                            </div>
                                        @else
                                            <a href="{{ route('admin.banner.edit', ['bannerPerPage'=> $banner]) }}"><span class="badge badge-primary">Upload</span></a>
                                        @endif
                                    </td>
                                    <td>{{ $banner->updated_at->diffForHumans() }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="@lang('about-content-action')">
                                            <a href="{{ route('admin.banner.edit', ['bannerPerPage' => $banner]) }}" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.edit')" class="btn btn-primary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection