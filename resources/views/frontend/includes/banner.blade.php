<div class="swiper-container swiper-banner">
    <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @if ($active_banner->count() > 0)
                @foreach ($active_banner as $banner)
                    <div class="swiper-slide">
                        <div class="w-full h-250px md:h-485px relative m-0">
                            <div class="background h-full w-full bg-center bg-cover bg-no-repeat absolute inset-0" style="background-image: url('{{ $banner->getImageAttribute() }}')"></div>
                            <div id="banner-description" class="absolute w-full h-full flex items-center">
                                <div class="container w-3/4 mx-auto banner-text"
                                    data-aos-mirror="false"
                                    data-aos-easing="ease-in-out"
                                    data-aos-duration="500"
                                >
                                    <h4 class="lg:text-5xl text-base md:text-lg md:font-extrabold text-bold uppercase text-white">{{ $banner->title }}</h4>
                                    <h6 class="md:text-lg text-sm font-thin uppercase tracking-bannerParagraph text-white mb-6">{{ $banner->description }}</h6>
                                    <a href="" class="rounded-md bg-api-red font-semibold px-4 py-1 text-white text-sm">Learn More >></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                @for ($i = 0; $i < 3; $i++)
                    <div class="swiper-slide">
                        <div class="w-full relative m-0">
                            <div id="banner-description" class="absolute w-full h-full flex items-center">
                                <div class="container w-3/4 mx-auto banner-text"
                                    data-aos-mirror="true"
                                    data-aos-easing="ease-in-out"
                                    data-aos-duration="1000"
                                >
                                    <h4 class="text-5xl font-extrabold uppercase text-white">welcome to <br> pt atlas petrochem indo</h4>
                                    <h6 class="text-lg font-thin uppercase tracking-bannerParagraph text-white mb-6">Your trusted lubricant distributor.</h6>
                                    <a href="" class="rounded-md bg-api-red font-semibold px-4 py-1 text-white text-sm">Learn More >></a>
                                </div>
                            </div>
                            <img src="{{ asset('img/frontend/banner/banner.jpg') }}" alt="" class="w-full">
                        </div>
                    </div>
                @endfor
            @endif
        </div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <div class="swiper-pagination"></div>
</div>
