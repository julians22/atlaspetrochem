@extends('backend.layouts.app')

{{-- @section('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.create')) --}}
@section('title', 'Galery Management | Edit Galery')

@section('breadcrumb-links')
    @include('backend.articles.galery.includes.breadcumb-links')
@endsection

@section('content')
    {{ html()->modelForm($galery, 'PATCH', route('admin.articles.galery.update', $galery))->class('form-horizontal')->open() }}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            Galery Management
                            <small class="text-muted">Edit Galery</small>
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

                        <div class="form-group row" id="toggle-type">
                            {{ html()->label('Type')->class('col-md-2 form-control-label')->for('type') }}
                            <div class="col-md-10">
                                <div class="form-check form-check-inline">
                                    {{ html()->radio('type', $galery == 'picture', 'picture')->class('form-check-input') }}
                                    <label class="form-check-label" for="picture-type">Picture</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    {{ html()->radio('type', $galery == 'video', 'video')->class('form-check-input') }}
                                    <label class="form-check-label" for="video-type">Video</label>
                                </div>
                            </div><!--col-->
                        </div>

                        <div class="form-group row" id="toggle-source">
                            {{ html()->label('Video Source')->class('col-md-2 form-control-label')->for('video_source') }}
                            <div class="col-md-10">
                                <select class="form-control" id="video_source" name="video_source">
                                    {{ html()->option('Upload', 'upload', ($galery->type == 'video' && $galery->youtube === 0) ) }}
                                    {{ html()->option('Youtube', 'youtube', ($galery->type == 'video' && $galery->youtube === 1) ) }}
                                </select>
                            </div>
                        </div>

                        <div class="form-group row" id="toggle-input-source">
                            {{ html()->label('Video Url')->class('col-md-2 form-control-label')->for('videoSourceUploadField') }}
                                <div class="col-md-10">
                                    <div class="input-group" id="video_source_upload_wrapper">
                                        {{ html()->text('video_source_upload')->id('videoSourceUploadField')->class('form-control')->placeholder('Video Source')->readonly()->attributes(['maxlength' => 191, 'value' => $galery->video_url]) }}
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button" id="lfmvideoSourceUploadField" data-input="videoSourceUploadField">Select Video</button>
                                        </div>
                                    </div>
                                    {{ html()->text('video_source_youtube')
                                        ->class('form-control')
                                        ->placeholder('Youtube Url')
                                        ->attributes(['maxlength' => 191, 'value' => $galery->video_url]) }}
                                    <small class="text-muted" id="video-source-instruction"></small>
                                </div>
                        </div>

                        <div class="form-group row" id="featured-image-wrapper">
                            {{ html()->label('Featured Image')->class('col-md-2 form-control-label')->for('featuredImageField') }}
                                <div class="col-md-10">
                                    <div class="input-group">
                                        {{ html()->text('featured_image')->id('featuredImageField')->attributes(['value' => $galery->image_location])->class('form-control')->placeholder('Featured Image')->readonly() }}
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button" id="lfmfeaturedImageField" data-input="featuredImageField">Select Image</button>
                                        </div>
                                    </div>
                                    <small class="text-muted">Recommended size 520 x 745 pixels, max file size 5mb</small>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer clearfix">
                <div class="row">
                    <div class="col">
                        {{ form_cancel(route('admin.articles.galery'), __('buttons.general.cancel')) }}
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

            $(document).ready(function () {
                var typeChecked = $('input[name=type]:checked', '#toggle-type').val();
                var sourceSelected = $('[name=video_source]', '#toggle-source').val();

                $('#lfmvideoSourceUploadField').filemanager('file');
                $('#lfmthumbnailImageField').filemanager('image');
                $('#lfmfeaturedImageField').filemanager('image');

                toggleTypeChecked(typeChecked);
                toggleVideoSource(sourceSelected);

                $('#toggle-type input').on('change', function() {
                    toggleTypeChecked($('input[name=type]:checked', '#toggle-type').val());
                    $('input[name=video_source_upload]').val(" ");
                    $('input[name=video_source_youtube]').val(" ");
                    $('input[name=featured_image]').val(" ");
                });
                
                $('[name=video_source]').on('change', function () {
                    toggleVideoSource($(this).val());
                    $('input[name=video_source_upload]').val(" ");
                    $('input[name=video_source_youtube]').val(" ");
                    $('input[name=featured_image]').val(" ");
                });
            });

            function toggleTypeChecked(typeChecked = 'picture') {
                if (typeChecked == 'picture') {
                    $('#toggle-source').hide();
                    $('#toggle-input-source').hide();
                    $('#featured-image-wrapper').show();
                }else if(typeChecked == 'video'){
                    $('#toggle-source').show();
                    $('#toggle-input-source').show();
                    $('#featured-image-wrapper').hide();
                }
            }

            function toggleVideoSource(sourceSelected = 'upload'){
                if (sourceSelected == 'youtube') {
                    $('#video_source_upload_wrapper').hide();
                    $('#video_source_youtube').show();
                    $('#video-source-instruction').text('Copy & Paste video url here!');
                }else if (sourceSelected == 'upload') {
                    $('#video_source_youtube').hide();
                    $('#video_source_upload_wrapper').show();
                    $('#video-source-instruction').text('Mas file size 200mb');
                }
            }
        </script>
@endpush
