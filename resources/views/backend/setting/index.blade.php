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
                                            @case('image')
                                                <div class="input-group">
                                                    <input type="text" name="{{$setting->id}}" id="{{ $setting->config }}Field" class="form-control" value="{{$setting->value}}">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary" type="button" id="lfm{{$setting->config}}Field" data-input="{{$setting->config}}Field">Select Image</button>
                                                    </div>
                                                </div>
                                                <small class="text-muted">Recommended size 144 x 16 pixels, max file size 1mb</small>
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
        <script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>

        <script>

            $(document).ready(function () {
                $('#lfmlogoField').filemanager('image');
            });
        </script>
@endpush
