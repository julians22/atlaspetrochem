<div>
    {{-- In work, do what you enjoy. --}}
    @if ($videos)
        <h4 class="text-3xl font-bold text-api-redDarken text-center">VIDEO</h4>
        <div class="w-20 h-1 mx-auto bg-api-redDarken"></div>
        <div class="mt-10" id="video-galery">
            @foreach ($videos as $video)
                <div>
                    @if ($video->youtube)
                        <iframe src="//www.youtube.com/embed/{{$video->video_url}}" class=" w-2/3 h-470px mx-auto"></iframe>
                    @else

                        <video id="{{ $video->slug }}"
                                class="video-js w-2/3 h-470px mx-auto"
                                controls
                                preload="auto"
                                poster="{{ $video->thumbnail_location ? $video->thumbnail_location : asset('img/frontend/news_img_1.jpg') }}">
                            <source src="{{ $video->video_url }}"  type="video/mp4">
                            <source src="{{ $video->video_url }}"  type="video/webm">
                        </video>
                    @endif
                    <h4 class="block text-center font-semibold mb-2 mt-4">{{ $video->title }}</h4>
                </div>
            @endforeach
        </div>

        <div class="w-4/5 sm:w-1/2 mx-auto">
            {{ $videos->links('includes.pagination.custom-pagination') }}
        </div>
    @endif
</div>

@push('after-scripts')
    <script type="text/javascript">
        document.addEventListener('livewire:load', function (event) {
            window.livewire.hook('afterDomUpdate', () => {
                if (document.querySelector('.video-js')) {
                    videojs(document.querySelector('.video-js'))
                }
            });
            console.log(document.querySelector('.video-js'))
            if (document.querySelector('.video-js')) {
                videojs(document.querySelector('.video-js'))
            }
        })
    </script>
@endpush
