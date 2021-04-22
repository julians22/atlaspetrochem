@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('Website Setting'))

@section('content')
{{ html()->form('PATCH', route('admin.setting.update-bulk'))->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        Website Settings
                    </h4>
                </div>
            </div><!-- row -->

            <div class="row mt-4">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 300px">Config</th>
                                <th>Value</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($settings as $setting)
                                <tr>
                                    <td>{{ $setting->config }}</td>
                                    <td>
                                        @switch($setting->type)
                                            @case('address')
                                                <textarea required name="{{ $setting->id }}" id="{{ Str::slug($setting->config) }}" class="form-control">{{ $setting->value }}</textarea>
                                                <small class="text-muted">Insert company address</small>
                                                @break
                                            @case('phone'||'email'||'url')
                                                <input required type="text" name="{{ $setting->id }}" id="{{ Str::slug($setting->config) }}" class="form-control" value="{{ $setting->value }}">
                                                @if ($setting->type == 'phone')
                                                    <small class="text-muted">Insert company contact number</small>
                                                @elseif ($setting->type == 'email')
                                                    <small class="text-muted">Insert {{$setting->config}}</small>
                                                @elseif ($setting->type == 'url')
                                                    @if ($setting->config == 'whatsapp url')
                                                        <small class="text-muted">Insert {{$setting->config}}</small>
                                                    @else
                                                        <small class="text-muted">Insert {{$setting->config}} url</small>
                                                    @endif
                                                @endif
                                                @break
                                            @default
                                                {{ $setting->value }}
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
            ]
        });
    </script>
@endpush

