@extends('backend.layouts.app')

{{-- @section('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.create')) --}}
@section('title', 'Sub Category Management | View Sub Category')

@section('content')

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    Sub Category Management
                    <small class="text-muted">View Sub Category</small>
                </h4>
            </div>
        </div>

        <div class="row mt-4 mb-4">
            <div class="col">
                <table class="table table-borderless">
                    <tr>
                        <th>Name</th>
                        <td>{{ $category->name }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{ $category->description }}</td>
                    </tr>
                    <tr>
                        <th>Featured Image</th>
                        <td>
                            <div style="width: 400px">
                                <img src="{{ $category->img_thumb }}" alt="{{ $category->img_thumb }}" class="w-100">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    {{-- <div class="card-footer">
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
    </div> --}}
</div>

@endsection
