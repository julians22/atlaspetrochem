@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('Company'))

@section('content')
    <section id="company" class="relative w-full">
        <div class="container w-2/3 mx-auto">
            @include('frontend.includes.banner-company')

            <div class="grid grid-cols-2 mt-6">
                <div class="text-center border-r border-white px-4" data-aos="fade-up" data-aos-duration="1000">
                    <h4 class="text-3xl text-api-red font-semibold tracking-widest mb-4 uppercase">VISION</h4>
                    <p class="text-white">{!! $vision_content->value !!}</p>
                </div>
                <div class="text-center border-l border-white px-4" data-aos="fade-up" data-aos-duration="1000">
                    <h4 class="text-3xl text-api-red font-semibold tracking-widest mb-4">MISSION</h4>
                    <p class="text-white">{!! $mission_content->value !!}</p>
                </div>
            </div>
            <div class="grid grid-cols-1 mt-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="text-center">
                    <h4 class="text-3xl text-api-red font-semibold tracking-widest mb-4">OUR BRAND</h4>
                    <p class="text-white">{!! $brand_content->value !!}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10 container mx-auto w-2/3" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="text-3xl font-extrabold text-white text-center mb-4">OUR TEAM</h2>
        <div class="swiper-container swiper-team border-b-2 border-gray-100  shadow-lg">
            <div class="swiper-wrapper">
                @foreach ($teamBanner as $banner)
                    <div class="swiper-slide">
                        <img src="{{ $banner->image_location }}" alt="" class="w-full">
                    </div>
                @endforeach
            </div>

            <div class="swiper-pagination"></div>
        </div>
        <div class="py-10 w-full">

            <h2 class="text-3xl font-extrabold text-black text-center mb-4">WHERE WE WORK</h2>
            <div class="grid grid-cols-3 mt-6">
                @foreach (json_decode($workplace_content->value) as $workplace)
                    <div class="border-black flex items-center justify-center
                        @if ($loop->iteration == 1)md:border-r pr-6
                        @elseif($loop->iteration == 2)md:border-l md:border-r px-6
                        @elseif($loop->iteration == 3)md:border-l pl-6
                        @endif
                    ">
                        <div class="leading-6">
                            {!! workplace_format($workplace) !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-10 container mx-auto w-2/3" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="text-3xl font-extrabold text-black text-center mb-4">DISTRIBUTION POINT</h2>
        <img src="{{ asset('img/frontend/dispoint.jpg') }}" alt="distribution_point" class="w-full my-4">
        {{-- <h5 class="text-2xl font-semibold text-center text-black mb-4 tracking-wider">Head Office</h5>
        <p class="text-center px-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic dolorem voluptates sed dolore esse tenetur, quaerat alias ipsa sint maiores quas, modi error, saepe aliquid commodi deleniti ut illo! Aut enim nam totam quo.</p> --}}
    </section>

    {{-- <section class="py-10 container mx-auto w-2/3" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="text-3xl font-extrabold text-black text-center mb-4">OUR CUSTOMERS</h2>
        <div class="grid grid-cols-2 w-full">
            <div class="flex flex-row flex-wrap">
                @for ($i = 1; $i <= 12; $i++)
                    <div class="w-1/4 p-4">
                        <img src="{{ asset('img/frontend/customers/img'.$i.'.png') }}" alt="" class="w-full">
                    </div>
                @endfor
            </div>
            <div class="flex flex-row flex-wrap-reverse">
                @for ($i = 1; $i <= 12; $i++)
                    <div class="w-1/4 p-4">
                        <img src="{{ asset('img/frontend/customers/img'.$i.'.png') }}" alt="" class="w-full">
                    </div>
                @endfor
            </div>
        </div>
    </section> --}}
@endsection
