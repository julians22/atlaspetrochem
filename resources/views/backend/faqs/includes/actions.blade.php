<div class="btn-group" role="group" >
    <a href="{{ route('admin.faq.show', ['faq' => $faq]) }}" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.view')">
        <i class="fas fa-eye"></i>
    </a>
    <a href="{{ route('admin.faq.edit', ['faq' => $faq]) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.edit')">
        <i class="fas fa-edit"></i>
    </a>
    <a href="{{ route('admin.faq.destroy', ['faq' => $faq]) }}" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.delete')"
        data-method="delete"
        data-trans-button-cancel="@lang('buttons.general.cancel')"
        data-trans-button-confirm="@lang('buttons.general.crud.delete')"
        data-trans-title="@lang('strings.backend.general.are_you_sure')"
    >
        <i class="fas fa-trash"></i>
    </a>
</div>
