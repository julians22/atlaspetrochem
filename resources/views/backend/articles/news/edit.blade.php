@extends('backend.layouts.app')

{{-- @section('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.create')) --}}
@section('title', 'News Management | Edit News')

@section('breadcrumb-links')
    @include('backend.articles.news.includes.breadcumb-links')
@endsection

@section('content')
    {{ html()->modelForm( $news, 'PATCH', route('admin.articles.news.update', $news->id))->class('form-horizontal')->open() }}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            News Management
                            <small class="text-muted">Edit News</small>
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
                            {{ html()->label('Intro')->class('col-md-2 form-control-label')->for('intro') }}
                                <div class="col-md-10">
                                    {{ html()->textarea('intro')->class('form-control pb-1')->attributes(['maxlength' =>  300, 'rows' => 4])->placeholder('Intro') }}
                                    <small class="float-right text-muted text-sm"><span id="total_text"></span> / 300 text</small>
                                </div>
                        </div>

                        <div class="form-group row">
                            {{ html()->label('Content')->class('col-md-2 form-control-label')->for('value') }}
                                <div class="col-md-10">
                                    {{ html()->textarea('value')->class('form-control')->placeholder('Content') }}
                                </div>
                        </div>

                        <div class="form-group row">
                            {{ html()->label('Thumbnail Image')->class('col-md-2 form-control-label')->for('thumbnailImageField') }}
                                <div class="col-md-10">
                                    <div class="input-group">
                                        {{ html()->text('thumb_location')->id('thumbnailImageField')->class('form-control')->placeholder('Thumbnail Image')->readonly() }}
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button" id="lfmthumbnailImageField" data-input="thumbnailImageField">Select Image</button>
                                        </div>
                                    </div>
                                    <small class="text-muted">Recommended size 520 x 745 pixels, max file size 5mb</small>
                                </div>
                        </div>

                        <div class="form-group row">
                            {{ html()->label('Featured Image')->class('col-md-2 form-control-label')->for('featuredImageField') }}
                                <div class="col-md-10">
                                    <div class="input-group">
                                        {{ html()->text('featured_image')->id('featuredImageField')->class('form-control')->placeholder('Featured Image')->readonly() }}
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
                        {{ form_cancel(route('admin.articles.news'), __('buttons.general.cancel')) }}
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
                $('#lfmthumbnailImageField').filemanager('image');
                $('#lfmfeaturedImageField').filemanager('image');

                const countTarget = $('textarea#intro');
                const maxSize = 300;

                $('#total_text').html(countTarget.val().length);

                $(countTarget).on('keyup', function () {
                    $('#total_text').html(countTarget.val().length);

                    if (countTarget.val().length >= maxSize) {
                        $('#total_text').addClass('text-danger').removeClass('text-muted');
                    }else{
                        $('#total_text').addClass('text-muted').removeClass('text-danger');
                    }
                });

                $('textarea#value').summernote({
                    height: 300,
                    maxHeight: null,
                    toolbar: [
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['font', ['strikethrough', 'superscript', 'subscript']],
                        ['table', ['table']],
                        ['insert', ['link']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']],
                        ['codeview']
                    ]
                });

            })
        </script>
@endpush
