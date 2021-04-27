<div class="btn-group" role="group" >
    <a href="{{ route('admin.product.show', ['product' => $product]) }}" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.view')">
        <i class="fas fa-eye"></i>
    </a>
    <a href="{{ route('admin.product.edit', ['product' => $product]) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.edit')">
        <i class="fas fa-edit"></i>
    </a>
    <a href="#" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.delete')"
        data-method="delete"
        data-trans-button-cancel="@lang('buttons.general.cancel')"
        data-trans-button-confirm="@lang('buttons.general.crud.delete')"
        data-trans-title="@lang('strings.backend.general.are_you_sure')"
        onclick="$(this).find('form').submit();"
    >
        <i class="fas fa-trash"></i>
        <form action="{{ route('admin.product.destroy', ['product'=> $product]) }}" method="POST" name="delete_item" style="display:none">
            @method('DELETE')
            @csrf
        </form>
    </a>
</div>
