@extends('backend.layouts.app')

{{-- @section('title', app_name() . ' | ' . __('labels.backend.access.users.management')) --}}
@section('title', 'News Management | Deleted News')

@section('breadcrumb-links')
    @include('backend.articles.news.includes.breadcumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    News Management <small class="text-muted">Deleted News</small>
                </h4>
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>@lang('labels.general.actions')</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if ($newses->count())
                                @foreach($newses as $news)
                                    <tr>
                                        <td>{{ $news->title }}</td>
                                        <td>{{ $news->slug }}</td>
                                        <td>{{ $news->created_at->diffForHumans() }}</td>
                                        <td>{{ $news->updated_at->diffForHumans() }}</td>
                                        <td class="btn-td">
                                            @include('backend.articles.news.includes.actions', [ 'news' => $news ])
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr><td colspan="5"><p class="text-center">Theres no deleted news</p></td></tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div><!--col-->
        </div><!--row-->
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    {!! $newses->total() !!} {{ trans_choice('labels.backend.articles.news.table.total', $newses->total()) }}
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                    {!! $newses->render() !!}
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection
