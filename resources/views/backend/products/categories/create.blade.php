@extends('backend.layouts.app')

{{-- @section('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.create')) --}}
@section('title', 'Sub Category Management | Create Category')

@section('content')
    {{ html()->form('POST', route('admin.product.category.store'))->class('form-horizontal')->open() }}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            Sub Category Management
                            <small class="text-muted">Create Sub Category</small>
                        </h4>
                    </div><!--col-->
                </div><!-- row -->

                <div class="row mt-4">
                    <div class="col">
                        <div class="form-group row">
                            {{ html()->label('Name')->class('col-md-2 form-control-label')->for('name') }}
                                <div class="col-md-10">
                                    {{ html()->text('name')
                                        ->class('form-control')
                                        ->placeholder('Title')
                                        ->attribute('maxlength', 191)
                                        ->required() }}
                                </div><!--col-->
                        </div><!-- form-group row-->

                         <div class="form-group row">
                            {{ html()->label('Description')->class('col-md-2 form-control-label')->for('description') }}
                                <div class="col-md-10">
                                    {{ html()->textarea('description')->class('form-control pb-1')->attributes(['maxlength' =>  250, 'rows' => 4])->placeholder('Description') }}
                                    <small class="float-right text-muted text-sm"><span id="total_text"></span> / 60 text</small>
                                </div>
                        </div>

                        <div class="form-group row">
                            {{ html()->label('Main Category')->class('col-md-2 form-control-label')->for('main_category') }}
                            <div class="col-md-10">
                                <select name="main_category_id" id="main_category_id" class="form-control">
                                    @foreach ($main_categories as $main_cat)
                                        {{ html()->option($main_cat->name, $main_cat->id) }}
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ html()->label('Thumbnail Image')->class('col-md-2 form-control-label')->for('thumbnailImageField') }}
                                <div class="col-md-10">
                                    <div class="input-group">
                                        {{ html()->text('img_thumb')->id('thumbnailImageField')->class('form-control')->placeholder('Thumbnail Image')->readonly() }}
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button" id="lfmthumbnailImageField" data-input="thumbnailImageField">Select Image</button>
                                        </div>
                                    </div>
                                    <small class="text-muted">Recommended size 400 x 300 pixels, max file size 5mb</small>
                                </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card-footer clearfix">
                <div class="row">
                    <div class="col">
                        {{ form_cancel(route('admin.product.category.index'), __('buttons.general.cancel')) }}
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
                $('#lfmthumbnailImageField').filemanager('image');
                $('#lfmfeaturedImageField').filemanager('image');

                const countTarget = $('textarea#description');
                const maxSize = 60;

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
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']]
                    ],
                    callbacks: {
                        onPaste: function(e) {
                            var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                            e.preventDefault();
                            setTimeout(function(){
                                document.execCommand( 'insertText', false, bufferText );
                            }, 10);
                        }
                    }
                });

            })
        </script>
@endpush
