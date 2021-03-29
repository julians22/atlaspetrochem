<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <div class="flex flex-col sm:flex-row justify-between w-full">
        <h4 class="text-2xl sm:text-4xl font-bold">NEWS</h4>

        <div class="w-52 relative">
            <input type="text" class="w-full border border-gray-200 p-2 focus:outline-none" wire:model="search" placeholder="Search">
            <span class="absolute bg-gray-400 text-white py-2 text-center inset-y-0 right-0 w-10 h-10 my-auto cursor-pointer hover:bg-gray-500 transition-all duration-150">
                <i class="fas fa-search m-auto"></i>
            </span>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-y-8 my-10">
        @foreach ($news as $n)
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-x-4">
                <div class="h-60 sm:h-80">
                    <a href="{{ route('frontend.article.news.show', ['slug' => $n->slug]) }}" class="group">
                        <div class="w-full h-full opacity-90 bg-no-repeat bg-cover bg-center group-hover:opacity-100 group-hover:scale-105 group-hover:-translate-y-1 transition duration-500 transform" style="background-image: url('{{ $n->thumb_location ? $n->thumb_location : asset('img/frontend/news_img_1.jpg') }}')"></div>
                    </a>
                </div>

                <div class="col-span-2">
                    <h4 class="font-bold text-2xl italic block">{{ $n->title }}</h4>
                    <span class="text-gray-500 mb-4"> {{ $n->created_at->format('d F Y') }}</span>
                    <div>
                        {!! $n->intro !!}
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="w-4/5 sm:w-1/2 mx-auto">
        {{ $news->links('includes.pagination.custom-pagination') }}
    </div>
</div>
