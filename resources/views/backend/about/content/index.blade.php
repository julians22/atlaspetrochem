@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('About Content Management'))

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        About Content Management
                    </h4>
                </div>
            </div><!-- row -->

            <div class="row mt-4">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Thumbnail Text</th>
                                <th>Last Updated</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($contents as $content)
                                <tr>
                                    <td>{{ $content->title }}</td>
                                    <td>{{ $content->thumb_text?:'N\A' }}</td>
                                    <td>{{ $content->updated_at->diffForHumans() }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="@lang('about-content-action')">
                                            <a href="{{ route('admin.content.about.show', $content) }}" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.view')" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.content.about.edit', $content) }}" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.edit')" class="btn btn-primary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!--col-->
            </div><!--row-->
        </div>
    </div>

@endsection

