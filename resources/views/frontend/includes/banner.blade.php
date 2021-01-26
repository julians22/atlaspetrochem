<div class="swiper-container swiper-banner">
    <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @for ($i = 0; $i < 3; $i++)
                <div class="swiper-slide">
                    <div class="w-full relative m-0">
                        @if ($showText)
                            <div id="banner-description" class="absolute w-full h-full flex items-center">
                                <div class="container w-3/4 mx-auto">
                                    <h4 class="text-5xl font-extrabold uppercase text-white">welcome to <br> pt atlas petrochem indo</h4>
                                    <h6 class="text-lg font-thin uppercase tracking-bannerParagraph text-white mb-6">Your trusted lubricant distributor.</h6>
                                    <a href="" class="rounded-md bg-api-red font-semibold px-4 py-1 text-white text-sm">Learn More >></a>
                                </div>
                            </div>
                        @endif
                        <img src="{{ asset('img/frontend/banner/banner.jpg') }}" alt="" class="w-full">
                    </div>
                </div>
            @endfor
        </div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <div class="swiper-pagination"></div>
</div>