@if ($banner->sort)
    <span class="font-weight-bold text-muted">{{ $banner->sort }}</span>
    @if ($banner->sort === 1)
        <div class="d-inline-block">
            <div class="d-inline-block">
                <div class="btn-group-vertical" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary" wire:click="sortDown({{$banner->id}})" wire:loading.class="disabled" wire:loading.attribute="aria-disabled='true'">
                        <i class="fas fa-arrow-circle-down" wire:loading.class="fa-spinner"></i>
                    </button>
                </div>
            </div>
        </div>

    @elseif($loop->last)
        <div class="d-inline-block">
            <div class="d-inline-block">
                <div class="btn-group-vertical" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary" wire:click="sortUp({{$banner->id}})" wire:loading.class="disabled" wire:loading.attribute="aria-disabled='true'">
                        <i class="fas fa-arrow-circle-up" wire:loading.class="fa-spinner"></i>
                    </button>
                </div>
            </div>
        </div>
    @else
        <div class="d-inline-block">
            <div class="btn-group-vertical" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary" wire:click="sortUp({{$banner->id}})" wire:loading.class="disabled" wire:loading.attribute="aria-disabled='true'">
                    <i class="fas fa-arrow-circle-up" wire:loading.class="fa-spinner"></i>
                </button>
                <button type="button" class="btn btn-primary" wire:click="sortDown({{$banner->id}})" wire:loading.class="disabled" wire:loading.attribute="aria-disabled='true'">
                    <i class="fas fa-arrow-circle-down" wire:loading.class="fa-spinner"></i>
                </button>
            </div>
        </div>
    @endif
@else
    <span class="text-muted">Default</span>
    <div class="d-inline-block">
        <div class="d-flex flex-column">
            <a href="#" class="d-block text-decoration-none" wire:click="sortDown({{$banner->id}})" wire:loading.class="disabled" wire:loading.attribute="aria-disabled='true'">
                <i class="fas fa-arrow-circle-down" wire:loading.class="fa-spinner"></i>
            </a>
        </div>
    </div>

@endif
