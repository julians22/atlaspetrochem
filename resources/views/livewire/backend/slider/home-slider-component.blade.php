<div>
    {{-- Do your work, then step back. --}}
    <div class="row mt-4">
        <div class="col">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Active</th>
                        <th>Linked</th>
                        <th>Sort</th>
                        <th>Updated At</th>
                        <th>@lang('labels.general.actions')</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($banners as $banner)
                        <tr>
                            <td>
                                <div style="width: 200px">
                                    <img src="{{ $banner->getImageAttribute() }}" alt="{{ Str::slug($banner->title) }}" class="w-100">
                                </div>
                            </td>
                            <td>{{ $banner->title }}</td>
                            <td wire:ignore>@include('backend.slider.banner.includes.active', ['banner' => $banner])</td>
                            <td>@include('backend.slider.banner.includes.linked', ['banner' => $banner])</td>
                            <td>@include('backend.slider.banner.includes.sort', ['banner' => $banner])</td>
                            <td>{{ $banner->updated_at->diffForHumans() }}</td>
                            <td>
                                <div class="btn-group" role="group" >
                                    <a href="{{ route('admin.slider.banner.edit', $banner) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.edit')">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <a wire:ignore href="{{ route('admin.slider.banner.destroy', $banner) }}"
                                            data-toggle="tooltip"
                                            data-placement="top" title="@lang('buttons.general.crud.delete')"
                                            data-method="delete"
                                            data-trans-button-cancel="@lang('buttons.general.cancel')"
                                            data-trans-button-confirm="@lang('buttons.general.crud.delete')"
                                            data-trans-title="@lang('strings.backend.general.are_you_sure')"
                                            class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
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
                {!! $banners->total() !!} total banner
            </div>
        </div><!--col-->

        <div class="col-5">
            <div class="float-right">
                {!! $banners->render() !!}
            </div>
        </div><!--col-->
    </div><!--row-->
</div>
