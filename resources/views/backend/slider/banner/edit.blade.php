@extends('backend.layouts.app')

{{-- @section('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.create')) --}}
@section('title', 'Slider Home Management | Edit Slider Home')

@section('breadcrumb-links')
    @include('backend.slider.banner.includes.breadcrumb-links')
@endsection

@section('content')
    {{ html()->modelForm( $banner, 'PATCH', route('admin.slider.banner.update', $banner->id))->class('form-horizontal')->open() }}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            Slider Home Management
                            <small class="text-muted">Edit Slider Home</small>
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
                                        ->attribute('maxlength', 191) }}
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

                        <div class="form-group row">
                            {{ html()->label('Linked')->class('col-md-2 form-control-label')->for('linked-toggle') }}
                            <div class="col-md-10">
                                <div>
                                    <label class="switch switch-label switch-pill switch-primary mb-0">
                                        {{ html()->checkbox('linked', $banner->linked)->class('switch-input')->id('linked-toggle')->attribute('data-target', '#linked_location') }}
                                        <span class="switch-slider" data-checked="yes" data-unchecked="no"></span>
                                    </label>
                                </div>
                                <small>If this turned on, the "learn more" button will be showed on the banner</small>
                            </div><!--col-->
                        </div>

                        <div class="form-group row">
                            {{ html()->label('Linked To')->class('col-md-2 form-control-label')->for('linked_location') }}
                            <div class="col-md-10">
                                {{ html()->text('linked_location')
                                    ->class('form-control')
                                    ->placeholder('Url')
                                    ->attribute('maxlength', 191) }}
                                    <small>Insert url destination of the "learn more" button</small>
                            </div><!--col-->
                        </div>

                        <div class="form-group row">
                            {{ html()->label('Overlay Level')->class('col-md-2 form-control-label')->for('overlay_level') }}
                            <div class="col-md-10">
                                <div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        {{ html()->radio('overlay_level', false, 0)->class('custom-control-input')->id('overlay_level_1') }}
                                        <label class="custom-control-label" for="overlay_level_1">None</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        {{ html()->radio('overlay_level', false, 1)->class('custom-control-input')->id('overlay_level_2') }}
                                        <label class="custom-control-label" for="overlay_level_2">Medium</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        {{ html()->radio('overlay_level', false, 2)->class('custom-control-input')->id('overlay_level_3') }}
                                        <label class="custom-control-label" for="overlay_level_3">High</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ html()->label('Active')->class('col-md-2 form-control-label')->for('active') }}
                            <div class="col-md-10">
                                <div>
                                    <label class="switch switch-label switch-pill switch-primary mb-0">
                                        {{ html()->checkbox('active', $banner->active)->class('switch-input') }}
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
                        {{ form_cancel(route('admin.slider.banner'), __('buttons.general.cancel')) }}
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
            function showForm(toggleValue, target) {
                if(toggleValue === true){
                    $(target).parents('.form-group').fadeIn();
                }else{
                    $(target).parents('.form-group').fadeOut();
                }
            }

            $(document).ready(function () {
                const togglerForm = $('#linked-toggle');
                const targetToggler = $(togglerForm).data('target');

                showForm($(togglerForm).prop('checked'), targetToggler)

                $(togglerForm).on('change', function(){
                    showForm($(togglerForm).prop('checked'), targetToggler)
                });

            })
        </script>
@endpush
