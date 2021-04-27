@extends('backend.layouts.app')

{{-- @section('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.create')) --}}
@section('title', 'Career Management | Edit Career')

{{-- @section('breadcrumb-links')
    @include('backend.articles.news.includes.breadcumb-links')
@endsection --}}

@section('content')
    {{ html()->modelForm( $career, 'PATCH', route('admin.career.update', $career->id))->class('form-horizontal')->open() }}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            Career Management
                            <small class="text-muted">Edit Career</small>
                        </h4>
                    </div><!--col-->
                </div><!-- row -->

                <div class="row mt-4">
                    <div class="col">
                        <div class="form-group row">
                            {{ html()->label('Position')->class('col-md-2 form-control-label')->for('position') }}
                                <div class="col-md-10">
                                    {{ html()->text('position')
                                        ->class('form-control')
                                        ->placeholder('Position')
                                        ->attribute('maxlength', 191)
                                        ->required() }}
                                </div><!--col-->
                        </div><!-- form-group row-->

                        <div class="form-group row">
                            {{ html()->label('Job Description')->class('col-md-2 form-control-label')->for('job_desk') }}
                                <div class="col-md-10">
                                    {{ html()->textarea('job_desk')->class('form-control')->placeholder('Job Description') }}
                                </div>
                        </div>

                        <div class="form-group row">
                            {{ html()->label('Requirements')->class('col-md-2 form-control-label')->for('requirements') }}
                                <div class="col-md-10">
                                    {{ html()->textarea('requirements')->class('form-control')->placeholder('Requirements') }}
                                </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card-footer clearfix">
                <div class="row">
                    <div class="col">
                        {{ form_cancel(route('admin.career'), __('buttons.general.cancel')) }}
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

                $('textarea#requirements').summernote({
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
                $('textarea#job_desk').summernote({
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
