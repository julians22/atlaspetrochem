@extends('backend.layouts.app')

{{-- @section('title', app_name() . ' | ' . __('labels.backend.access.users.management')) --}}
@section('title', app_name() . ' | Products Management')

{{-- @section('breadcrumb-links') --}}
    {{-- @include('backend.articles.news.includes.breadcumb-links') --}}
{{-- @endsection --}}

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        Products Management <small class="text-muted">All Products</small>
                    </h4>
                </div>
            </div><!-- row -->

            <div class="row mt-4">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>@lang('labels.general.actions')</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{!! $product->name !!}</td>
                                        <td>{!! $product->description !!}</td>
                                        <td>{{ $product->category->name }} || {{ $product->category->division }}</td>
                                        <td>{{ $product->created_at->diffForHumans() }}</td>
                                        <td>{{ $product->updated_at->diffForHumans() }}</td>
                                        <td class="btn-td">
                                            @include('backend.products.includes.actions', ['product' => $product])
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
                    {!! $products->total() !!} {{ trans_choice('labels.backend.products.table.total', $products->total()) }}
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                    {!! $products->render() !!}
                </div>
            </div><!--col-->
        </div><!--row-->
        </div>
    </div>
@endsection

