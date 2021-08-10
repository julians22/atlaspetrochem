@extends('backend.layouts.app')

{{-- @section('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.create')) --}}
@section('title', 'News Management | Edit News')

@section('breadcrumb-links')
    @include('backend.articles.news.includes.breadcumb-links')
@endsection

@section('content')
    {{ html()->modelForm( $news, 'PATCH', route('admin.articles.news.update', $news->id))->class('form-horizontal')->open() }}
        <div class="card mb-1">
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
                        @include('backend.includes.forms.text', ['name' => 'title', 'data' => $news])
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        @include('backend.includes.forms.textarea', ['name' => 'intro', 'countableWord' => true, 'maxSize' => 300, 'data' => $news, 'label' => 'Intro Text'])

                        @include('backend.includes.forms.wysiwyg', ['name' => 'value', 'data' => $news, 'label' => 'Content'])
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            {{ html()->label('Thumbnail Image')->for('thumbnailImageField') }}
                            <div class="input-group">
                                {{ html()->text('thumb_location')->id('thumbnailImageField')->class('form-control')->placeholder('Thumbnail Image')->readonly() }}
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" id="lfmthumbnailImageField" data-preview="thumbnailPreview" data-input="thumbnailImageField">Select Image</button>
                                </div>
                            </div>
                            <small class="text-muted">Recommended size 520 x 745 pixels, max file size 5mb</small>
                            <div id="thumbnailPreview">
                                <img src="{{ $news->thumb_location }}" id="thumbnailPreview" style="height: 5rem">
                            </div>
                        </div>

                        <div class="form-group">
                            {{ html()->label('Featured Image')->for('featuredImageField') }}
                            <div class="input-group">
                                {{ html()->text('featured_image')->id('featuredImageField')->class('form-control')->placeholder('Featured Image')->readonly() }}
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" id="lfmfeaturedImageField" data-preview="featuredPreview" data-input="featuredImageField">Select Image</button>
                                </div>
                            </div>
                            <small class="text-muted">Recommended size 520 x 745 pixels, max file size 5mb</small>
                            <div id="featuredPreview">
                                <img src="{{ $news->featured_image }}" id="thumbnailPreview" style="height: 5rem">
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
            </div>
        </div>
    {{ html()->form()->close() }}
@endsection

@push('after-scripts')
        <script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
        <script>
            $(document).ready(function () {
                $('#lfmthumbnailImageField').filemanager('image');
                $('#lfmfeaturedImageField').filemanager('image');
            })
        </script>
@endpush
