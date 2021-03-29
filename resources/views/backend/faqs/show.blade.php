@extends('backend.layouts.app')

{{-- @section('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.create')) --}}
@section('title', 'Faq Management | View Faq')

@section('content')

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    Faq Management
                    <small class="text-muted">View Faq</small>
                </h4>
            </div>
        </div>

        <div class="row mt-4 mb-4">
            <div class="col">
                <table class="table table-borderless">
                    <tr>
                        <th>Question</th>
                        <td>{{ $faq->question_text }}</td>
                    </tr>
                    <tr>
                        <th>Answer</th>
                        <td>{{ $faq->answer_text }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="card-footer">
        <div class="row">
            <div class="col">
                <small class="float-right text-muted">
                    <strong>Created At:</strong> {{ timezone()->convertToLocal($faq->created_at) }} ({{ $faq->created_at->diffForHumans() }}),
                    <strong>Updated At:</strong> {{ timezone()->convertToLocal($faq->updated_at) }} ({{ $faq->updated_at->diffForHumans() }})
                </small>
            </div><!--col-->
        </div><!--row-->
    </div>
</div>

@endsection
