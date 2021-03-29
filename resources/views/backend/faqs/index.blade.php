@extends('backend.layouts.app')

{{-- @section('title', app_name() . ' | ' . __('labels.backend.access.users.management')) --}}
@section('title', app_name() . ' | Faqs Management')

{{-- @section('breadcrumb-links') --}}
    {{-- @include('backend.articles.news.includes.breadcumb-links') --}}
{{-- @endsection --}}

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        Faqs Management <small class="text-muted">All Faqs</small>
                    </h4>
                </div>
                <div class="col-sm-7">
                    @include('backend.faqs.includes.header-buttons')
                </div><!--col-->
            </div><!-- row -->

            <div class="row mt-4">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Question Text</th>
                                <th>@lang('labels.general.active')</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>@lang('labels.general.actions')</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($faqs as $faq)
                                    <tr>
                                        <td>{!! $faq->question_text !!}</td>
                                        <td>{{ $faq->active }}</td>
                                        <td>{{ $faq->created_at->diffForHumans() }}</td>
                                        <td>{{ $faq->updated_at->diffForHumans() }}</td>
                                        <td class="btn-td">
                                            @include('backend.faqs.includes.actions', ['faq' => $faq])
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!--col-->
            </div><!--row-->

            <div class="row">
            <div class="col-7">
                <div class="float-left">
                    {!! $faqs->total() !!} {{ trans_choice('labels.backend.faqs.table.total', $faqs->total()) }}
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                    {!! $faqs->render() !!}
                </div>
            </div><!--col-->
        </div><!--row-->
        </div>
    </div>
@endsection

