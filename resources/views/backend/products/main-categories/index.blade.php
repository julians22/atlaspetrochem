@extends('backend.layouts.app')

{{-- @section('title', app_name() . ' | ' . __('labels.backend.access.users.management')) --}}
@section('title', app_name() . ' | Main Categories Management')

{{-- @section('breadcrumb-links') --}}
    {{-- @include('backend.articles.news.includes.breadcumb-links') --}}
{{-- @endsection --}}

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        Main Categories Management <small class="text-muted">All Main Categories</small>
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
                                <th>Thummnail Image</th>
                                <th>Description</th>
                                <th>Updated At</th>
                                <th>@lang('labels.general.actions')</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{!! $category->name !!}</td>
                                        <td>
                                            <div style="max-width: 100px">
                                                <img src="{{ $category->image_location }}" class="w-100" alt="">
                                            </div>
                                        </td>
                                        <td>{!! $category->description !!}</td>
                                        <td>{{ $category->updated_at->diffForHumans() }}</td>
                                        <td class="btn-td">
                                            @include('backend.products.main-categories.includes.actions', ['category' => $category])
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
                    {!! $categories->total() !!} {{ trans_choice('labels.backend.category.table.total', $categories->total()) }}
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                    {!! $categories->render() !!}
                </div>
            </div><!--col-->
        </div><!--row-->
        </div>
    </div>
@endsection

