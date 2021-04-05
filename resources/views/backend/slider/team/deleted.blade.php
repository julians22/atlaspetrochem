@extends('backend.layouts.app')

@section('title', __('Slider Company Management') . ' | ' . __('Deleted Slider Company'))

@section('breadcrumb-links')
    @include('backend.slider.team.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{-- {{ __('labels.backend.access.users.management') }} <small class="text-muted">{{ __('labels.backend.access.users.active') }}</small> --}}
                    Slider Company Management <small class="text-muted">Deleted Sliders</small>
                </h4>
            </div><!--col-->

            <div class="col-sm-7">
                @include('backend.slider.company.includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Active</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>@lang('labels.general.actions')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sliders as $slider)
                            <tr>
                                <td>
                                    <div style="width: 200px">
                                        <img src="{{ $slider->image_location }}" alt="{{ $slider->image_location }}" class="w-100">
                                    </div>
                                </td>
                                <td>@include('backend.slider.team.includes.active', ['slider' => $slider])</td>
                                <td>{{ $slider->created_at->diffForHumans() }}</td>
                                <td>{{ $slider->updated_at->diffForHumans() }}</td>
                                <td>
                                    @include('backend.slider.team.includes.actions', ['slider' => $slider])
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
                    {!! $sliders->total() !!} total slider
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                    {!! $sliders->render() !!}
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection
