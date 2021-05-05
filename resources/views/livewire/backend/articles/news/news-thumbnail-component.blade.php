<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="row mt-4">
        <div class="col-sm-5">
            <h4 class="card-title">
                News Thumbnail
            </h4>
        </div>

        @if ($newsThumbs->count() < 3)
        <div class="col-sm-7">
            <div class="btn-toolbar float-right" role="toolbar" aria-label="@lang('labels.general.toolbar_btn_groups')">
                <a href="#" class="btn btn-success ml-1" wire:click="modalCreateThumb" data-toggle="tooltip" title="@lang('labels.general.create_new')"><i class="fas fa-plus-circle"></i></a>
            </div><!--btn-toolbar-->
        </div><!--col-->
        @endif
    </div>

    <div class="row mt-4">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Sort</th>
                    </tr>
                </thead>

                <tbody>
                    @if ($newsThumbs)
                        @foreach ($newsThumbs as $thumb)
                            <tr>
                                <td>{{ $thumb->news->title }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        @if ($thumb->sort)
                                            <span class="font-weight-bold text-muted">{{ $thumb->sort }}</span>
                                            @if ($thumb->sort === 1)
                                                <div class="d-inline-block">
                                                    <div class="d-inline-block">
                                                        <div class="btn-group-vertical" role="group" aria-label="Basic example">
                                                            <button type="button" class="btn btn-primary" wire:click="sortDown({{$thumb->id}})" wire:loading.class="disabled" wire:loading.attribute="aria-disabled='true'">
                                                                <i class="fas fa-arrow-circle-down" wire:loading.class="fa-spinner"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            @elseif($loop->last)
                                                <div class="d-inline-block">
                                                    <div class="d-inline-block">
                                                        <div class="btn-group-vertical" role="group" aria-label="Basic example">
                                                            <button type="button" class="btn btn-primary" wire:click="sortUp({{$thumb->id}})" wire:loading.class="disabled" wire:loading.attribute="aria-disabled='true'">
                                                                <i class="fas fa-arrow-circle-up" wire:loading.class="fa-spinner"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="d-inline-block">
                                                    <div class="btn-group-vertical" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-primary" wire:click="sortUp({{$thumb->id}})" wire:loading.class="disabled" wire:loading.attribute="aria-disabled='true'">
                                                            <i class="fas fa-arrow-circle-up" wire:loading.class="fa-spinner"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-primary" wire:click="sortDown({{$thumb->id}})" wire:loading.class="disabled" wire:loading.attribute="aria-disabled='true'">
                                                            <i class="fas fa-arrow-circle-down" wire:loading.class="fa-spinner"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            @endif
                                        @else
                                            <span class="text-muted">Default</span>
                                            <div class="d-inline-block">
                                                <div class="d-flex flex-column">
                                                    <a href="#" class="d-block text-decoration-none" wire:click="sortDown({{$thumb->id}})" wire:loading.class="disabled" wire:loading.attribute="aria-disabled='true'">
                                                        <i class="fas fa-arrow-circle-down" wire:loading.class="fa-spinner"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="create-thumb-modal" tabindex="-1" role="dialog" wire:ignore.self aria-labelledby="createThumbModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createThumbModalLabel">Create News Thumbnail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">News Title:</label>
                        <select wire:model="news" class="form-control">
                            @foreach ($newses as $news)
                                <option value="{{ $news->id }}">{{ $news->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click="saveThumb" class="btn btn-primary">Save</button>
            </div>
            </div>
        </div>
        </div>
</div>
