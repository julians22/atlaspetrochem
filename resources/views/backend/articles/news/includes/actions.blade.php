@if ($news->trashed())
    <div class="btn-group" role="group" aria-label="@lang('labels.backend.access.users.user_actions')">
        <a href="{{ route('admin.articles.news.restore', $news) }}" name="confirm_item" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Restore News">
            <i class="fas fa-sync"></i>
        </a>

        <a href="{{ route('admin.articles.news.delete-permanently', $news) }}" name="confirm_item" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete Permanently">
            <i class="fas fa-trash"></i>
        </a>
    </div>
@else
    <div class="btn-group" role="group" >
        <a href="{{ route('admin.articles.news.show', ['news' => $news]) }}" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.view')">
            <i class="fas fa-eye"></i>
        </a>
        <a href="{{ route('admin.articles.news.edit', ['news' => $news]) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.edit')">
            <i class="fas fa-edit"></i>
        </a>
        <a href="{{ route('admin.articles.news.destroy', ['news' => $news]) }}" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.delete')"
            data-method="delete"
            data-trans-button-cancel="@lang('buttons.general.cancel')"
            data-trans-button-confirm="@lang('buttons.general.crud.delete')"
            data-trans-title="@lang('strings.backend.general.are_you_sure')"
        >
            <i class="fas fa-trash"></i>
        </a>
    </div>
@endif
