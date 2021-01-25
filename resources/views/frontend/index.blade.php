@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('banner')
    @include('frontend.includes.banner')
@endsection

@section('content')
    <section class="py-6 container mx-auto">
        <h4 class="text-2xl font-bold text-center tracking-widest">THE LEADING LUBRICANT</h4>
        <h5 class="text-xl font-semibold text-gray-800 text-center tracking-widest">FROM JAPAN</h5>
        <img src="{{ asset('img/frontend/oil_bottle.png') }}" class="w-3/4 mx-auto mt-4" alt="lubricant.png">
    </section>

    <section class="py-6 transform -skew-y-3">
        <span class="bg-api-red px-4 py-1 rounded-t-md font-semibold text-white ml-12">PERUSAHAAN UNGGULAN</span>
        <div class="grid grid-cols-3 border-t-8 border-api-red">
            <img src="{{ asset('img/frontend/section_img_1.jpg') }}" alt="">
            <img src="{{ asset('img/frontend/section_img_1.jpg') }}" alt="">
            <img src="{{ asset('img/frontend/section_img_1.jpg') }}" alt="">
        </div>
    </section>

    <section class="py-12 container mx-auto">
        <div class="w-3/4 mx-auto">
            <h4 class="text-2xl font-bold text-center tracking-widest">SDM UNGGULAN</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-0 w-full py-6">
                <div class="text-center border-0 md:border-r border-black">
                    <h3 class="text-6xl font-extrabold text-api-red">2000+</h3>
                    <h5 class="font-light tracking-widest">EMPLOYES</h5>
                </div>
                <div class="text-center border-0 md:border-l border-black">
                    <h3 class="text-6xl font-extrabold text-api-red">HIGH</h3>
                    <h5 class="font-light tracking-widest">EDUCATION LEVEL</h5>
                </div>
            </div>
        </div>
    </section>

    <section class="py-6 transform skew-y-3">
        <span class="bg-api-red px-4 py-1 rounded-t-md font-semibold text-white ml-12">NEWS & GALLERY</span>
        <div class="grid grid-cols-3 border-t-8 border-api-red">
            <img src="{{ asset('img/frontend/section_img_1.jpg') }}" alt="">
            <img src="{{ asset('img/frontend/section_img_1.jpg') }}" alt="">
            <img src="{{ asset('img/frontend/section_img_1.jpg') }}" alt="">
        </div>
    </section>

    <section class="py-12 container mx-auto">
        <div class="w-3/4 mx-auto">
            <span class="bg-api-red px-4 py-1 rounded-t-md font-semibold text-white">VIDEO TITLE</span>
            <div id="video-frame" class="border-8 border-api-red w-full">
                <div class="swiper-container swiper-video">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide relative">
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
                        <div class="swiper-slide relative">
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
                        <div class="swiper-slide relative">
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

            <div class="text-box md:px-14 md:py-10 text-center">
                <p class="text-center text-black text-sm font-medium mb-6">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga, alias illo. Illum dolorum harum quidem ratione rerum nemo quasi voluptatum nisi ipsa quod? Deleniti ab a blanditiis provident in molestias dolor ut iste! Sapiente nemo quibusdam officia doloremque, error, ab iste distinctio impedit accusantium labore nobis sint similique iusto, quis voluptates quo a architecto assumenda delectus? Cumque quidem itaque aspernatur!
                </p>
                <a href="#" class="rounded-md bg-api-red font-semibold px-4 py-1 text-white text-sm">View Galery >></a>
            </div>
        </div>
    </section>
@endsection
