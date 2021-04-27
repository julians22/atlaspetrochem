@extends('backend.layouts.app')

{{-- @section('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.create')) --}}
@section('title', 'Product Management | Edit Product')

@section('content')
    {{ html()->modelForm( $product, 'PATCH', route('admin.product.update', $product->id))->class('form-horizontal')->open() }}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            Product Management
                            <small class="text-muted">Edit Product</small>
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
                            {{ html()->label('Category')->class('col-md-2 form-control-label')->for('category') }}
                                <div class="col-md-10">
                                    <select name="category_id" id="category" class="form-control">
                                        @foreach ($categories as $category)
                                            <option {{ $product->category_id == $category->id ? 'selected' : ''  }} value="{{ $category->id }}">{{ $category->name }} || {{ $category->main_category->name }}</option>
                                        @endforeach
                                    </select>
                                </div><!--col-->
                        </div><!-- form-group row-->

                         <div class="form-group row">
                            {{ html()->label('Description')->class('col-md-2 form-control-label')->for('description') }}
                                <div class="col-md-10">
                                    {{ html()->textarea('description')->class('form-control pb-1')->attributes(['maxlength' =>  250, 'rows' => 4])->placeholder('Description') }}
                                </div>
                        </div>

                        <div class="form-group row">
                            {{ html()->label('Product Url')->class('col-md-2 form-control-label')->for('link') }}
                                <div class="col-md-10">
                                    {{ html()->text('link')
                                        ->class('form-control')
                                        ->placeholder('Product Url')
                                        ->attribute('maxlength', 191) }}
                                </div><!--col-->
                        </div><!-- form-group row-->

                    </div>
                </div>
            </div>

            <div class="card-footer clearfix">
                <div class="row">
                    <div class="col">
                        {{ form_cancel(route('admin.product.index'), __('buttons.general.cancel')) }}
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

                var editor = $('textarea#description').summernote({
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
