@extends('backend.layouts.app')

{{-- @section('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.create')) --}}
@section('title', 'Main Category Management | View Main Category')

@section('content')

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    Main Category Management
                    <small class="text-muted">View Main Category</small>
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
                        <th>Thumbnail Image</th>
                        <td>
                            <div style="width: 400px">
                                <img src="{{ $category->image_location }}" alt="{{ $category->image_location }}" class="w-100">
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
                    <strong>Created At:</strong> {{ timezone()->convertToLocal($category->created_at) }} ({{ $category->created_at->diffForHumans() }}),
                    <strong>Updated At:</strong> {{ timezone()->convertToLocal($category->updated_at) }} ({{ $category->updated_at->diffForHumans() }})
                </small>
            </div><!--col-->
        </div><!--row-->
    </div>
</div>

@endsection
