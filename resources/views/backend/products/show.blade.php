@extends('backend.layouts.app')

{{-- @section('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.create')) --}}
@section('title', 'Product Management | View Product')

@section('content')

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    Product Management
                    <small class="text-muted">View Product</small>
                </h4>
            </div>
        </div>

        <div class="row mt-4 mb-4">
            <div class="col">
                <table class="table table-borderless">
                    <tr>
                        <th>Name</th>
                        <td>{{ $product->name }}</td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td class="text-uppercase">{{ $product->category->name }} || {{ $product->category->division }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{!! $product->description !!}</td>
                    </tr>

                </table>
            </div>
        </div>
    </div>

    <div class="card-footer">
        <div class="row">
            <div class="col">
                <small class="float-right text-muted">
                    <strong>Created At:</strong> {{ timezone()->convertToLocal($product->created_at) }} ({{ $product->created_at->diffForHumans() }}),
                    <strong>Updated At:</strong> {{ timezone()->convertToLocal($product->updated_at) }} ({{ $product->updated_at->diffForHumans() }})
                    @if($product->trashed())
                        <strong>Deleted At:</strong> {{ timezone()->convertToLocal($product->deleted_at) }} ({{ $product->deleted_at->diffForHumans() }})
                    @endif
                </small>
            </div><!--col-->
        </div><!--row-->
    </div>
</div>

@endsection
