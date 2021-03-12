@extends('backend.layouts.app')

{{-- @section('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.create')) --}}
@section('title', 'Career Management | View Career')

{{--
@section('breadcrumb-links')
    @include('backend.articles.news.includes.breadcumb-links')
@endsection --}}

@section('content')

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    Career Management
                    <small class="text-muted">View Career</small>
                </h4>
            </div>
        </div>

        <div class="row my-4">
            <div class="col">
                <table class="table table-borderless">
                    <tr>
                        <th>Position</th>
                        <td>{{ $career->position }}</td>
                    </tr>
                    <tr>
                        <th>Job Desk</th>
                        <td>{{ $career->job_desk }}</td>
                    </tr>
                    <tr>
                        <th>Requirements</th>
                        <td>{!! $career->requirements !!}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    Application
                </h4>
            </div>
        </div>

        <div class="row my-4">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($career->countApply() > 0)
                            @foreach ($career->applications as $application)
                                <tr>
                                    <td>{{ $application->name }}</td>
                                    <td>{{ $application->email }}</td>
                                    <td>{{ $application->gender }}</td>
                                    <td>{{ $application->phone }}</td>
                                    <td>{{ $application->message }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="text-center">No application</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card-footer">
        <div class="row">
            <div class="col">
                <small class="float-right text-muted">
                    <strong>Created At:</strong> {{ timezone()->convertToLocal($career->created_at) }} ({{ $career->created_at->diffForHumans() }}),
                    <strong>Updated At:</strong> {{ timezone()->convertToLocal($career->updated_at) }} ({{ $career->updated_at->diffForHumans() }})
                    @if($career->trashed())
                        <strong>Deleted At:</strong> {{ timezone()->convertToLocal($career->deleted_at) }} ({{ $career->deleted_at->diffForHumans() }})
                    @endif
                </small>
            </div><!--col-->
        </div><!--row-->
    </div>
</div>

@endsection
