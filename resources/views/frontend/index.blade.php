@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@push('after-styles')
    <link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet"/>
@endpush
@push('before-scripts')
    <script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>

    <script>
            videojs(document.querySelector('.video-js'))
    </script>
@endpush

@section('banner')
    @include('frontend.includes.banner')
@endsection


@section('content')
    <section class="py-6" data-aos="fade-up" data-aos-duration="2000">
        <h4 class="md:text-2xl text-lg font-bold text-center tracking-widest">THE LEADING LUBRICANT</h4>
        <h5 class="md:text-xl text-base font-semibold text-gray-800 text-center tracking-widest">FROM JAPAN</h5>
        <div class="w-full mx-auto relative mt-4">
            <img src="{{ asset('img/frontend/oil_bottle.png') }}" class="md:w-3/4 w-4/5 mx-auto" alt="lubricant.png">

            <div class="flex flex-row w-full absolute top-5 inset-x-0 bottom-0 overflow-hidden">
                @foreach ($main_categories as $main_category)
                    @if ($loop->first)
                        <div class="w-1/2 h-full group">
                            <div class="bg-api-redDarken flex bg-opacity-50 w-full h-full -left-full group-hover:left-0 relative animate__animated animate__slideInLeft transition-all duration-1000 ease-in-out">
                                <div class="py-10 w-1/2 relative text-center">
                                    <h4 class="text-4xl font-bold tracking-widest text-black text-center">{!! $main_category->name !!}</h4>
                                    <a href="{{ route('frontend.show-categories', ['main_categories'=> $main_category->slug]) }}" class="mt-10 inline-block rounded-tr-md rounded-bl-md bg-black font-semibold px-4 py-1 text-white text-sm">See Details >></a>
                                </div>
                                <div class="w-1/2 p-10">
                                    <img src="{{ $main_category->image_location ?: asset('img/frontend/automotive_products.png') }}" alt="" class="w-full">
                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($loop->last)
                        <div class="w-1/2 h-full group">
                            <div class="bg-api-redDarken flex bg-opacity-50 w-full h-full -right-full group-hover:right-0 relative animate__animated animate__slideInRight transition-all duration-1000 ease-in-out">
                                <div class="w-1/2 p-10">
                                    <img src="{{ $main_category->image_location ?: asset('img/frontend/industrial_products.png') }}" alt="" class="w-full">
                                </div>
                                <div class="py-10 w-1/2 relative text-center">
                                    <h4 class="text-4xl font-bold tracking-widest text-black text-center">{!! $main_category->name !!}</h4>
                                    <a href="{{ route('frontend.show-categories', ['main_categories'=> $main_category->slug]) }}" class="mt-10 inline-block rounded-tr-md rounded-bl-md bg-black font-semibold px-4 py-1 text-white text-sm">See Details >></a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-6 transform -skew-y-3 perusahaan-unggulan" id="counter-trigger-point">
        <span class="bg-api-red px-4 py-1 rounded-t-md font-semibold text-white ml-4 sm:ml-12">PERUSAHAAN UNGGULAN</span>
        <div class="grid grid-cols-1 sm:grid-cols-3 border-t-8 border-api-red h-full">
            @foreach ($abouts as $about)
                <a href="{{ route('frontend.about') }}#about-{{$loop->iteration}}" class="block h-300px sm:h-auto">
                    <div class="bg-no-repeat bg-top bg-cover group h-full" style="background-image: url('{{ $about->thumb_location ?: asset('img/frontend/section_img_'.$loop->iteration.'.jpg') }}')">
                        <div class="h-full w-full relative bg-api-redDarken bg-opacity-0 group-hover:bg-opacity-70 transition-colors duration-500">
                            <div class="absolute inset-0 transform skew-y-3 text-white px-8 text-center text-lg font-semibold flex items-center justify-items-center flex-wrap overflow-hidden">
                                <div class="opacity-30 text-white group-hover:opacity-100 group-hover:text-yellow-400 transition duration-400 relative p-4">
                                    <h4 class="text-xl font-bold uppercase mx-auto">
                                    {{ $about->title }}
                                    </h4>
                                    <blockquote class="text-base mt-4">
                                        {!! $about->thumb_text !!}
                                    </blockquote>
                                    <div class="inset-0 border-2 border-white bg-transparent swirl-in-bck group-hover:block hidden absolute h-full w-full"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>

    <section class="py-12 container mx-auto" data-aos="fade-in" data-aos-duration="1500">
        <div class="w-3/4 mx-auto">
            <h4 class="sm:text-2xl text-lg font-bold text-center tracking-widest">OUR CUSTOMERS</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-0 w-full py-6" data-aos="fade-up" data-aos-duration="2000">
                <div class="text-center border-0 md:border-r border-black">
                    <h3 class="sm:text-6xl text-4xl font-extrabold text-api-red">
                        <span class="counter" data-value="9000" data-duration="50"></span>
                        <span>+</span>
                    </h3>
                    <h5 class="font-light tracking-widest">CUSTOMERS</h5>
                </div>
                <div class="text-center border-0 md:border-l border-black" data-aos="fade-up" data-aos-duration="2000">
                    <h3 class="sm:text-6xl text-4xl font-extrabold text-api-red">HIGH</h3>
                    <h5 class="font-light tracking-widest">QUALITY SERVICE</h5>
                </div>
            </div>
        </div>
    </section>

    <section class="py-6 transform skew-y-3" id="article-thumbnail">
        <span class="bg-api-red px-4 py-1 rounded-t-md font-semibold text-white ml-12">NEWS & GALLERY</span>
        <div class="grid grid-cols-1 sm:grid-cols-3 border-t-8 border-api-red h-full">
            @foreach ($newses as $news)
                <div class="bg-no-repeat bg-center bg-cover group h-300px sm:h-auto" style="background-image: url('{{ $news->thumb_location ? $news->thumb_location : asset('img/frontend/news_img_'.$loop->iteration.'.jpg') }}')">
                    <div class="h-full w-full relative bg-black bg-opacity-20 group-hover:bg-opacity-80 transition-colors duration-500">
                        <div class="sm:mt-auto mb-auto absolute inset-x-0 top-0 sm:bottom-0 sm:top-auto block transform -skew-y-3 text-white px-8 text-center text-lg font-semibold pt-8 sm:pb-8">
                            <h4 class="text-xl font-bold text-yellow-400 uppercase">{{ $news->title }}</h4>
                            <span class="h-1 w-16 bg-yellow-400 mx-auto block"></span>
                            <blockquote class="text-sm mt-4">
                                {{ $news->intro }}
                            </blockquote>
                            <a href="{{ route('frontend.article.news.show', ['slug' => $news->slug]) }}" class="w-40 bg-api-red hover:bg-api-redDarken transition-colors duration-300 mx-auto block text-sm mt-4 rounded-full">Read More >></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="py-12 container mx-auto">
        <div class="w-4/5 sm:w-3/4 mx-auto">
            <span id="video-title" class="bg-api-red px-4 py-1 rounded-t-md font-semibold text-white" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="2000">VIDEO TITLE</span>
            <div id="video-frame" class="border-8 border-api-red w-full" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                <div class="swiper-container swiper-video">
                    <div class="swiper-wrapper">
                        @foreach ($videos as $video)
                            @if ($video->youtube)
                                <div class="swiper-slide relative" data-title="{{$video->title}}">
                                    <iframe src="//www.youtube.com/embed/{{$video->video_url}}" style="width: 100%; height: 400px" frameborder="0" allowfullscreen  controls></iframe>
                                </div>
                            @else
                                <div class="swiper-slide relative" data-title="{{$video->title}}">
                                    <video id="{{ $video->slug }}"
                                            class="video-js"
                                            controls
                                            style="width: 100%; height: 400px"
                                            preload="auto"
                                            poster="{{ $video->thumbnail_location ? $video->thumbnail_location : asset('img/frontend/news_img_1.jpg') }}">
                                        <source src="{{ $video->video_url }}"  type="video/mp4">
                                    </video>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="text-box md:px-14 md:py-10 text-center" data-aos="fade-up" data-aos-duration="1500">
                <a href="#" class="rounded-md bg-api-red font-semibold px-4 py-1 text-white text-sm">View Galery >></a>
            </div>
        </div>
    </section>
@endsection
