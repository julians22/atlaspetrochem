<div class="swiper-container swiper-banner">
    <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @if ($active_company_banner->count() > 0)
                @foreach ($active_company_banner as $banner)
                    <div class="swiper-slide">
                        <div class="w-full relative m-0">
                            <img src="{{ $banner->image_location ?: asset('img/frontend/banner/banner_company_auto.jpg') }}" alt="" class="w-full">
                        </div>
                    </div>
                @endforeach
            @else
                @for ($i = 0; $i < 3; $i++)
                    <div class="swiper-slide">
                        <div class="w-full relative m-0">
                            <img src="{{ asset('img/frontend/banner/banner_company_auto.jpg') }}" alt="" class="w-full">
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
