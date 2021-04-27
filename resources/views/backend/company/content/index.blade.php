@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('Company Content Management'))

@section('content')
{{ html()->form('PATCH', route('admin.content.company.update-bulk'))->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        Company Content Management
                    </h4>
                </div>
            </div><!-- row -->

            <div class="row mt-4">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 300px">Key</th>
                                <th>Value</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($contents as $content)
                                <tr>
                                    <td>{{ $content->key }}</td>
                                    <td>
                                        @switch($content->type)
                                            @case('array-text')
                                                    @foreach (json_decode($content->value) as $contentValue)
                                                    <div class="form-group">
                                                        <label for="{{ $content->key.'-'.$loop->iteration }}">{{ $content->key.' '.$loop->iteration }} :</label>
                                                        <textarea name="workplace[]" id="{{ $content->key.'-'.$loop->iteration }}" class="editor-sumnote"> {{ $contentValue }} </textarea>
                                                    </div>
                                                    @endforeach
                                                @break
                                            @default
                                                <textarea name="{{$content->key}}" class="editor-sumnote">{{$content->value}}</textarea>
                                        @endswitch
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!--col-->
            </div><!--row-->
        </div>

        <div class="card-footer clearfix">
            <div class="row">
                <div class="col">
                    {{-- {{ form_cancel(route('admin.product.index'), __('buttons.general.cancel')) }} --}}
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
    <script>
        $('textarea.editor-sumnote').summernote({
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
    </script>
@endpush

