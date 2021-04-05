@if ($slider->trashed())
    <div class="btn-group" role="group" aria-label="@lang('labels.backend.access.users.user_actions')">
        <a href="{{ route('admin.slider.company.restore', $slider) }}" name="confirm_item" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="@lang('Restore slider')">
            <i class="fas fa-sync"></i>
        </a>

        <a href="{{ route('admin.slider.company.delete-permanently', $slider) }}" name="confirm_item" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="@lang('Delete slider permanently')">
            <i class="fas fa-trash"></i>
        </a>
    </div>
@else
    <div class="btn-group" role="group" aria-label="@lang('slider-actions')">

        <a href="{{ route('admin.slider.company.edit', $slider) }}" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.edit')" class="btn btn-primary">
            <i class="fas fa-edit"></i>
        </a>

        <a href="{{ route('admin.slider.company.destroy', $slider) }}"
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
@endif
