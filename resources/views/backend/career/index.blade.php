@extends('backend.layouts.app')

{{-- @section('title', app_name() . ' | ' . __('labels.backend.access.users.management')) --}}
@section('title', app_name() . ' | Careers Management')

{{-- @section('breadcrumb-links') --}}
    {{-- @include('backend.articles.news.includes.breadcumb-links') --}}
{{-- @endsection --}}

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        Careers Management <small class="text-muted">All Careers</small>
                    </h4>
                </div>
                <div class="col-sm-7">
                    @include('backend.career.includes.header-buttons')
                </div><!--col-->
            </div><!-- row -->

            <div class="row mt-4">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Position</th>
                                <th>Active</th>
                                <th>Total Application</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>@lang('labels.general.actions')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($careers as $career)
                                <tr>
                                    <td>{{ $career->position }}</td>
                                    <td>
                                        @include('backend.career.includes.active', ['career' => $career])
                                    </td>
                                    <td>{{ $career->countApply() }}</td>
                                    <td>{{ $career->created_at->diffForHumans() }}</td>
                                    <td>{{ $career->updated_at->diffForHumans() }}</td>
                                    <td class="btn-td">
                                        @include('backend.career.includes.actions', ['career' => $career])
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!--col-->
            </div><!--row-->
        </div>
    </div>
@endsection

