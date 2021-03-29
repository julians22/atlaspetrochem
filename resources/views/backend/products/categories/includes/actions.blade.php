<div class="btn-group" role="group" >
    <a href="{{ route('admin.product.category.show', ['category' => $category]) }}" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.view')">
        <i class="fas fa-eye"></i>
    </a>
    <a href="{{ route('admin.product.category.edit', ['category' => $category]) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.edit')">
        <i class="fas fa-edit"></i>
    </a>
</div>
