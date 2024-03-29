@extends('backend.layouts.app')

{{-- @section('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.create')) --}}
@section('title', 'Faq Management | '. __('labels.backend.faqs.create'))

@section('content')
    {{ html()->form('POST', route('admin.faq.store'))->class('form-horizontal')->open() }}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            Faq Management
                            <small class="text-muted">{{ __('labels.backend.faqs.create') }}</small>
                        </h4>
                    </div><!--col-->
                </div><!-- row -->

                <div class="row mt-4">
                    <div class="col">

                        <div class="form-group row">
                            {{ html()->label('Question Text')->class('col-md-2 form-control-label')->for('question_text') }}
                                <div class="col-md-10">
                                    {{ html()->textarea('question_text')->class('form-control editor')->placeholder('Question Text') }}
                                </div>
                        </div>

                        <div class="form-group row">
                            {{ html()->label('Answer Text')->class('col-md-2 form-control-label')->for('answer_text') }}
                                <div class="col-md-10">
                                    {{ html()->textarea('answer_text')->class('form-control editor')->placeholder('Answer Text') }}
                                </div>
                        </div>


                        <div class="form-group row">
                            {{ html()->label(__('validation.attributes.backend.access.users.active'))->class('col-md-2 form-control-label')->for('active') }}

                            <div class="col-md-10">
                                <label class="switch switch-label switch-pill switch-primary">
                                    {{ html()->checkbox('active', true)->class('switch-input') }}
                                    <span class="switch-slider" data-checked="yes" data-unchecked="no"></span>
                                </label>
                            </div><!--col-->
                        </div><!--form-group-->
                </div>
            </div>

        </div>
        <div class="card-footer clearfix">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.faqs'), __('buttons.general.cancel')) }}
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
    @include('backend.includes.partials.scripts.tiny-editor', ['editors' => [['id' => '.editor']]])
@endpush
