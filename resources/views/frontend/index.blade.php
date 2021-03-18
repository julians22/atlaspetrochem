@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('banner')
    @include('frontend.includes.banner')
@endsection

@section('content')
    <section class="py-6" data-aos="fade-up" data-aos-duration="2000">
        <h4 class="text-2xl font-bold text-center tracking-widest">THE LEADING LUBRICANT</h4>
        <h5 class="text-xl font-semibold text-gray-800 text-center tracking-widest">FROM JAPAN</h5>
        <div class="w-full mx-auto relative mt-4">
            <img src="{{ asset('img/frontend/oil_bottle.png') }}" class="w-3/4 mx-auto" alt="lubricant.png">

            <div class="flex flex-row w-full absolute top-5 inset-x-0 bottom-0 overflow-hidden">
                <div class="w-1/2 h-full group">
                    <div class="pr-24 bg-black bg-opacity-50 w-full h-full -left-full group-hover:left-0 relative animate__animated animate__slideInLeft transition-all duration-1000 ease-in-out">
                        <div class="bg-api-redLighten bg-opacity-50 pt-20 pb-4 w-3/5 ml-auto px-4 mb-4 relative">
                            <h4 class="text-xl font-bold tracking-widest text-white">DIVISI AUTOMOTIVE</h4>
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ducimus temporibus doloremque voluptate officia, ratione quia ipsum blanditiis molestias architecto?</p>
                            <a href="#" class="rounded-md bg-api-red font-semibold px-4 py-1 text-white text-sm absolute -bottom-10">View Galery >></a>
                        </div>
                    </div>
                </div>
                <div class="w-1/2 h-full group">
                    <div class="pl-24 bg-black bg-opacity-50 w-full h-full -right-full group-hover:right-0 relative animate__animated animate__slideInRight transition-all duration-1000 ease-in-out">
                        <div class="bg-api-redLighten bg-opacity-50 pt-20 pb-4 w-3/5 mr-auto px-4 mb-4 relative">
                            <h4 class="text-xl font-bold tracking-widest text-white">DIVISI INDUSTRIAL</h4>
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ducimus temporibus doloremque voluptate officia, ratione quia ipsum blanditiis molestias architecto?</p>
                            <a href="#" class="rounded-md bg-api-red font-semibold px-4 py-1 text-white text-sm absolute -bottom-10">View Galery >></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-6 transform -skew-y-3 perusahaan-unggulan" id="counter-trigger-point">
        <span class="bg-api-red px-4 py-1 rounded-t-md font-semibold text-white ml-12">PERUSAHAAN UNGGULAN</span>
        <div class="grid grid-cols-3 border-t-8 border-api-red h-full">
            @for ($i = 1; $i <= 3; $i++)
                <div class="bg-no-repeat bg-top bg-cover group" style="background-image: url('{{ asset('img/frontend/section_img_'.$i.'.jpg') }}')">
                    <div class="h-full w-full relative bg-black bg-opacity-70 group-hover:bg-opacity-80 transition-colors duration-500">
                        <div class="absolute inset-0 transform skew-y-3 text-white px-8 text-center text-lg font-semibold flex items-center">
                            <blockquote class="text-base mt-4 opacity-30 text-white group-hover:opacity-100 group-hover:text-yellow-400 transition duration-400">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, impedit.
                            </blockquote>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </section>

    <section class="py-12 container mx-auto" data-aos="fade-in" data-aos-duration="1500">
        <div class="w-3/4 mx-auto">
            <h4 class="text-2xl font-bold text-center tracking-widest">OUR CUSTOMERS</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-0 w-full py-6" data-aos="fade-up" data-aos-duration="2000">
                <div class="text-center border-0 md:border-r border-black">
                    <h3 class="text-6xl font-extrabold text-api-red">
                        <span class="counter" data-value="9000" data-duration="50"></span>
                        <span>+</span>
                    </h3>
                    <h5 class="font-light tracking-widest">CUSTOMERS</h5>
                </div>
                <div class="text-center border-0 md:border-l border-black" data-aos="fade-up" data-aos-duration="2000">
                    <h3 class="text-6xl font-extrabold text-api-red">HIGH</h3>
                    <h5 class="font-light tracking-widest">QUALITY SERVICE</h5>
                </div>
            </div>
        </div>
    </section>

    <section class="py-6 transform skew-y-3" id="article-thumbnail">
        <span class="bg-api-red px-4 py-1 rounded-t-md font-semibold text-white ml-12">NEWS & GALLERY</span>
        <div class="grid grid-cols-3 border-t-8 border-api-red h-full">
            @foreach ($newses as $news)
                <div class="bg-no-repeat bg-center bg-cover group" style="background-image: url('{{ $news->thumb_location ? $news->thumb_location : asset('img/frontend/news_img_'.$loop->iteration.'.jpg') }}')">
                    <div class="h-full w-full relative bg-black bg-opacity-70 group-hover:bg-opacity-80 transition-colors duration-500">
                        <div class="mt-auto absolute inset-x-0 bottom-0 block transform -skew-y-3 text-white px-8 text-center text-lg font-semibold pb-8">
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
        <div class="w-3/4 mx-auto">
            <span class="bg-api-red px-4 py-1 rounded-t-md font-semibold text-white" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="2000">VIDEO TITLE</span>
            <div id="video-frame" class="border-8 border-api-red w-full" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                <div class="swiper-container swiper-video">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide relative" style="width: 800px; height: 400px">
                            {{-- <span class="w-16 absolute inset-0 mx-auto">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="w-full opacity-70">
                                        <g>
                                            <path xmlns="http://www.w3.org/2000/svg" d="M256,0C114.617,0,0,114.615,0,256s114.617,256,256,256s256-114.615,256-256S397.383,0,256,0z M344.48,269.57l-128,80  c-2.59,1.617-5.535,2.43-8.48,2.43c-2.668,0-5.34-0.664-7.758-2.008C195.156,347.172,192,341.82,192,336V176  c0-5.82,3.156-11.172,8.242-13.992c5.086-2.836,11.305-2.664,16.238,0.422l128,80c4.676,2.93,7.52,8.055,7.52,13.57  S349.156,266.641,344.48,269.57z" fill="#ffffff" data-original="#000000" style="" class=""/>
                                        </g>
                                    </svg>
                                </a>
                            </span> --}}
                            <iframe src="https://www.youtube.com/embed/zJ7hUvU-d2Q" frameborder="0" allowfullscreen class="w-full h-full"></iframe>
                        </div>
                        <div class="swiper-slide relative" style="width: 800px; height: 400px">
                            <span class="w-16 absolute inset-0 mx-auto">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="w-full opacity-70">
                                        <g>
                                            <path xmlns="http://www.w3.org/2000/svg" d="M256,0C114.617,0,0,114.615,0,256s114.617,256,256,256s256-114.615,256-256S397.383,0,256,0z M344.48,269.57l-128,80  c-2.59,1.617-5.535,2.43-8.48,2.43c-2.668,0-5.34-0.664-7.758-2.008C195.156,347.172,192,341.82,192,336V176  c0-5.82,3.156-11.172,8.242-13.992c5.086-2.836,11.305-2.664,16.238,0.422l128,80c4.676,2.93,7.52,8.055,7.52,13.57  S349.156,266.641,344.48,269.57z" fill="#ffffff" data-original="#000000" style="" class=""/>
                                        </g>
                                    </svg>
                                </a>
                            </span>
                            <img src="{{ asset('img/frontend/video/video1.jpg') }}" alt="" class="w-full">
                        </div>
                        <div class="swiper-slide relative" style="width: 800px; height: 400px">
                            <span class="w-16 absolute inset-0 mx-auto">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="w-full opacity-70">
                                        <g>
                                            <path xmlns="http://www.w3.org/2000/svg" d="M256,0C114.617,0,0,114.615,0,256s114.617,256,256,256s256-114.615,256-256S397.383,0,256,0z M344.48,269.57l-128,80  c-2.59,1.617-5.535,2.43-8.48,2.43c-2.668,0-5.34-0.664-7.758-2.008C195.156,347.172,192,341.82,192,336V176  c0-5.82,3.156-11.172,8.242-13.992c5.086-2.836,11.305-2.664,16.238,0.422l128,80c4.676,2.93,7.52,8.055,7.52,13.57  S349.156,266.641,344.48,269.57z" fill="#ffffff" data-original="#000000" style="" class=""/>
                                        </g>
                                    </svg>
                                </a>
                            </span>
                            <img src="{{ asset('img/frontend/video/video1.jpg') }}" alt="" class="w-full">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="text-box md:px-14 md:py-10 text-center" data-aos="fade-up" data-aos-duration="1500">
                <p class="text-center text-black text-sm font-medium mb-6">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga, alias illo. Illum dolorum harum quidem ratione rerum nemo quasi voluptatum nisi ipsa quod? Deleniti ab a blanditiis provident in molestias dolor ut iste! Sapiente nemo quibusdam officia doloremque, error, ab iste distinctio impedit accusantium labore nobis sint similique iusto, quis voluptates quo a architecto assumenda delectus? Cumque quidem itaque aspernatur!
                </p>
                <a href="#" class="rounded-md bg-api-red font-semibold px-4 py-1 text-white text-sm">View Galery >></a>
            </div>
        </div>
    </section>
@endsection
