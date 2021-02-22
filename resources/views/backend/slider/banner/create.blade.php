@extends('backend.layouts.app')

{{-- @section('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.create')) --}}
@section('title', 'Slider Banner Management | Create Slider Banner')

@section('content')
    {{ html()->form('POST', route('admin.slider.banner.store'))->class('form-horizontal')->open() }}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            Slider Banner Management
                            <small class="text-muted">Create Slider Banner</small>
                        </h4>
                    </div><!--col-->
                </div><!-- row -->

                <div class="row mt-4">
                    <div class="col">
                        <div class="form-group row">
                            {{ html()->label('Title')->class('col-md-2 form-control-label')->for('title') }}
                                <div class="col-md-10">
                                    {{ html()->text('title')
                                        ->class('form-control')
                                        ->placeholder('Title')
                                        ->attribute('maxlength', 191)
                                        ->required() }}
                                </div><!--col-->
                        </div><!-- form-group row-->

                        <div class="form-group row">
                            {{ html()->label('Description')->class('col-md-2 form-control-label')->for('description') }}
                                <div class="col-md-10">
                                    {{ html()->textarea('description')->class('form-control')->placeholder('Description') }}
                                </div>
                        </div>

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
                    </div>
                </div>
            </div>

            <div class="card-footer clearfix">
                <div class="row">
                    <div class="col">
                        {{ form_cancel(route('admin.slider.banner'), __('buttons.general.cancel')) }}
                    </div><!--col-->

                    <div class="col text-right">
                        {{ form_submit(__('buttons.general.crud.create')) }}
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