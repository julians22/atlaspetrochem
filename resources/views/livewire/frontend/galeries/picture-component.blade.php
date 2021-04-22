<div>
    {{-- In work, do what you enjoy. --}}
    @if ($pictures)
        <h4 class="text-3xl font-bold text-api-redDarken text-center">IMAGE</h4>
        <div class="w-20 h-1 mx-auto bg-api-redDarken"></div>
        <div class="grid grid-cols-3 mt-10 gap-x-8 gap-y-4">
            @foreach ($pictures as $picture)
                <div>
                    <div class="mb-2 bg-cover bg-center bg-no-repeat h-72 w-full" style="background-image: url('{{ $picture->image_location ? $picture->image_location : asset('img/frontend/news_img_1.jpg') }}')"></div>
                    <h4 class="block text-center font-semibold mb-2">{{ $picture->title }}</h4>
                </div>
            @endforeach
        </div>

        <div class="w-4/5 sm:w-1/2 mx-auto">
            {{ $pictures->links('includes.pagination.custom-pagination') }}
        </div>
    @endif
</div>
