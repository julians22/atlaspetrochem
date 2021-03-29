<div class="swiper-container swiper-banner">
    <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @if ($active_banner->count() > 0)
                @foreach ($active_banner as $banner)
                    <div class="swiper-slide">
                        <div class="w-full h-250px md:h-485px relative m-0">
                            <div class="background h-full w-full bg-center bg-cover bg-no-repeat absolute inset-0" style="background-image: url('{{ $banner->getImageAttribute() }}')"></div>
                            <div id="banner-description" class="absolute w-full h-full flex items-center
                                {{ banner_overlay($banner->overlay_level) }}
                            ">
                                <div class="container w-4/5 sm:w-3/4 px-2 sm:px-0 mx-auto banner-text"
                                    data-aos-mirror="false"
                                    data-aos-easing="ease-in-out"
                                    data-aos-duration="500"
                                >
                                    <h4 class="lg:text-5xl text-base md:text-lg md:font-extrabold font-bold uppercase text-white">{{ $banner->title }}</h4>
                                    <h6 class="md:text-lg text-sm font-thin uppercase tracking-bannerParagraph text-white mb-6">{{ $banner->description }}</h6>
                                    @if ($banner->isLinked())
                                        <a href="{{ $banner->linked_location }}" class="rounded-md bg-api-red font-semibold px-2 sm:px-4 py-1 text-white text-sm" target="_blank">Learn More >></a>
                                    @endif
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
    <div class="swiper-button-prev">
        <svg class="fill-current text-gray-100" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11 20C6.02944 20 2 15.9706 2 11C2 6.02944 6.02944 2 11 2C15.9706 2 20 6.02944 20 11C20 15.9706 15.9706 20 11 20ZM0 11C0 17.0751 4.92487 22 11 22C17.0751 22 22 17.0751 22 11C22 4.92487 17.0751 0 11 0C4.92487 0 0 4.92487 0 11Z"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7071 17.7071C14.0976 17.3166 14.0976 16.6834 13.7071 16.2929L8.41421 11L13.7071 5.70711C14.0976 5.31658 14.0976 4.68342 13.7071 4.29289C13.3166 3.90237 12.6834 3.90237 12.2929 4.29289L6.29289 10.2929C5.90237 10.6834 5.90237 11.3166 6.29289 11.7071L12.2929 17.7071C12.6834 18.0976 13.3166 18.0976 13.7071 17.7071Z"/>
        </svg>
    </div>
    <div class="swiper-button-next">
        <svg class="fill-current text-gray-100" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11 20C15.9706 20 20 15.9706 20 11C20 6.02944 15.9706 2 11 2C6.02944 2 2 6.02944 2 11C2 15.9706 6.02944 20 11 20ZM22 11C22 17.0751 17.0751 22 11 22C4.92487 22 0 17.0751 0 11C0 4.92487 4.92487 0 11 0C17.0751 0 22 4.92487 22 11Z"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.29289 17.7071C7.90237 17.3166 7.90237 16.6834 8.29289 16.2929L13.5858 11L8.29289 5.70711C7.90237 5.31658 7.90237 4.68342 8.29289 4.29289C8.68342 3.90237 9.31658 3.90237 9.70711 4.29289L15.7071 10.2929C16.0976 10.6834 16.0976 11.3166 15.7071 11.7071L9.70711 17.7071C9.31658 18.0976 8.68342 18.0976 8.29289 17.7071Z"/>
        </svg>
    </div>

    <div class="swiper-pagination"></div>
</div>
