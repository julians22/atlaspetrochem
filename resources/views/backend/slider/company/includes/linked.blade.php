@if (!$banner->isLinked())
    <span class="badge badge-danger">No</span>
@else
    <a href="{{ $banner->linked_location }}" target="_blank">
        <span class="badge badge-success">{{ $banner->linked_location }}</span>
    </a>
@endif
