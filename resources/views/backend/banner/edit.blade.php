@extends('backend.layouts.app')

@section('title', __('About Content Management') . ' | ' . __('Edit About Content'))

@section('content')
    {{ html()->modelForm( $bannerPerPage, 'PATCH', route('admin.banner.update', ['bannerPerPage' => $bannerPerPage]))->class('form-horizontal')->open() }}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            Banner Per Page Management
                            <small class="text-muted">Edit Banner Per Page</small>
                        </h4>
                    </div><!--col-->
                </div><!-- row -->

                <div class="row mt-4">
                    <div class="col">
                        <div class="form-group row">
                            {{ html()->label('Image Location')->class('col-md-2 form-control-label')->for('image_location_desktop') }}
                            <div class="col-md-10">
                                <div class="input-group">
                                    {{ html()->text('image_location_desktop')->id('imageLocation')->class('form-control')->placeholder('Image Location')->readonly()->required() }}
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button" id="lfm" data-input="imageLocation">Select Image</button>
                                    </div>
                                </div>
                                <small class="text-muted">Recommended size 1920 x 748 pixels, max file size 5mb</small>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card-footer clearfix">
                <div class="row">
                    <div class="col">
                        {{ form_cancel(route('admin.banner.index'), __('buttons.general.cancel')) }}
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

            $(document).ready(function () {
                $('#lfm').filemanager('image');
                // $('#lfm-2').filemanager('image');
            })
        </script>
@endpush
