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
                <div class="col-sm-7">
                    @include('backend.products.includes.header-buttons')
                </div><!--col-->
            </div><!-- row -->

            @livewire('backend.products.product-table-component')

            {{-- <div class="row mt-4">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Updated At</th>
                                <th>@lang('labels.general.actions')</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{!! $product->name !!}</td>
                                        <td>
                                            <span class="badge badge-success text-wrap">{{ $product->category->name }} || {{ $product->category->main_category->name }}</span>
                                        </td>
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
        </div><!--row--> --}}
        </div>
    </div>
@endsection

