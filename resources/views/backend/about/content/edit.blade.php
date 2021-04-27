@extends('backend.layouts.app')

@section('title', __('About Content Management') . ' | ' . __('Edit About Content'))

@section('content')
    {{ html()->modelForm( $content, 'PATCH', route('admin.content.about.update', ['content' => $content]))->class('form-horizontal')->open() }}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            About Content Management
                            <small class="text-muted">Edit About Content</small>
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
                            {{ html()->label('Thumbnail Text')->class('col-md-2 form-control-label')->for('thumb_text') }}
                                <div class="col-md-10">
                                    {{ html()->textarea('thumb_text')->class('form-control pb-1')->attributes(['maxlength' =>  250, 'rows' => 4])->placeholder('Intro') }}
                                    <small class="float-right text-muted text-sm"><span id="total_text"></span> / 200 text</small>
                                </div>
                        </div>

                        <div class="form-group row">
                            {{ html()->label('Content')->class('col-md-2 form-control-label')->for('content') }}
                                <div class="col-md-10">
                                    {{ html()->textarea('content')->class('form-control')->placeholder('Content') }}
                                </div>
                        </div>

                        <div class="form-group row">
                            {{ html()->label('Thumbnail Image Location')->class('col-md-2 form-control-label')->for('thumb_location') }}
                            <div class="col-md-10">
                                <div class="input-group">
                                    {{ html()->text('thumb_location')->id('thumbLocationField')->class('form-control')->placeholder('Thumbnail Location')->readonly() }}
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button" id="lfm" data-input="thumbLocationField">Select Image</button>
                                    </div>
                                </div>
                                <small class="text-muted">Recommended size 450 x 500 pixels, max file size 5mb</small>
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ html()->label('Featured Image Location')->class('col-md-2 form-control-label')->for('featured_image_location') }}
                            <div class="col-md-10">
                                <div class="input-group">
                                    {{ html()->text('featured_image_location')->id('featuredImageLocation')->class('form-control')->placeholder('Image Location')->readonly() }}
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button" id="lfm-2" data-input="featuredImageLocation">Select Image</button>
                                    </div>
                                </div>
                                <small class="text-muted">Recommended size 900 x 500 pixels, max file size 5mb</small>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card-footer clearfix">
                <div class="row">
                    <div class="col">
                        {{ form_cancel(route('admin.content.about.index'), __('buttons.general.cancel')) }}
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
                $('#lfm-2').filemanager('image');
                // $('#lfmthumbnailImageField').filemanager('image');
                // $('#lfmfeaturedImageField').filemanager('image');

                const countTarget = $('textarea#thumb_text');
                const maxSize = 200;

                $('#total_text').html(countTarget.val().length);

                $(countTarget).on('keyup', function () {
                    $('#total_text').html(countTarget.val().length);

                    if (countTarget.val().length >= maxSize) {
                        $('#total_text').addClass('text-danger').removeClass('text-muted');
                    }else{
                        $('#total_text').addClass('text-muted').removeClass('text-danger');
                    }
                });

            })
        </script>
    @include('backend.includes.partials.scripts.tiny-editor', ['editors' => [['id' => '#content']]])
@endpush
