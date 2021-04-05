@extends('backend.layouts.app')

{{-- @section('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.create')) --}}
@section('title', 'Slider Company Management | Edit Slider Company')

@section('breadcrumb-links')
    @include('backend.slider.company.includes.breadcrumb-links')
@endsection

@section('content')
    {{ html()->modelForm( $slider, 'PATCH', route('admin.slider.company.update', ['company' => $slider]))->class('form-horizontal')->open() }}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            Slider Company Management
                            <small class="text-muted">Edit Slider Company</small>
                        </h4>
                    </div><!--col-->
                </div><!-- row -->

                <div class="row mt-4">
                    <div class="col">

                        <div class="form-group row">
                            {{ html()->label('Image Location')->class('col-md-2 form-control-label')->for('image_location') }}
                            <div class="col-md-10">
                                <div class="input-group">
                                    {{ html()->text('image_location')->id('imageLocationField')->class('form-control')->placeholder('Image Location')->readonly() }}
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button" id="lfm" data-input="imageLocationField">Select Image</button>
                                    </div>
                                </div>
                                <small class="text-muted">Recommended size 1540 x 550 pixels, max file size 5mb</small>
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ html()->label('Active')->class('col-md-2 form-control-label')->for('active') }}
                            <div class="col-md-10">
                                <div>
                                    <label class="switch switch-label switch-pill switch-primary mb-0">
                                        {{ html()->checkbox('active', $slider->active)->class('switch-input') }}
                                        <span class="switch-slider" data-checked="yes" data-unchecked="no"></span>
                                    </label>
                                </div>
                                <small>If turned off, the banner will be stored but not showed on the home page</small>
                            </div><!--col-->
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer clearfix">
                <div class="row">
                    <div class="col">
                        {{ form_cancel(route('admin.slider.company'), __('buttons.general.cancel')) }}
                    </div><!--col-->

                    <div class="col text-right">
                        {{ form_submit(__('buttons.general.crud.update')) }}
                    </div><!--col-->
                </div><!--row-->
            </div><!--card-footer-->
        </div>
    {{ html()->form()->close() }}
@endsection

@push('after-scripts')
        <script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>

        <script>
            $('#lfm').filemanager('image');
        </script>
@endpush
