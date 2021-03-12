@if ($career->isActive())
    <a href="{{ route( 'admin.auth.user.unconfirm', $career) }}" data-toggle="tooltip" data-placement="top" title="@lang('buttons.backend.access.users.deactivate')" name="confirm_item">
        <span class="badge badge-success" style="cursor:pointer">@lang('labels.general.yes')</span>
    </a>
@else
    <a href="{{ route('admin.auth.user.confirm', $career) }}" data-toggle="tooltip" data-placement="top" title="@lang('buttons.backend.access.users.activate')" name="confirm_item">
        <span class="badge badge-danger" style="cursor:pointer">@lang('labels.general.no')</span>
    </a>
@endif