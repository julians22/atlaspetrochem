@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    <section id="company" class="relative w-full">
        <div class="container w-2/3 mx-auto">
            @include('frontend.includes.banner')

            <div class="grid grid-cols-2 mt-6">
                <div class="text-center border-r border-white px-4" data-aos="fade-in">
                    <h4 class="text-3xl text-api-red font-semibold tracking-widest mb-4">VISION</h4>
                    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, incidunt dolores laboriosam nostrum voluptates vel, iusto eveniet sequi modi hic autem, earum recusandae. Officia, quibusdam?</p>
                </div>
                <div class="text-center border-l border-white px-4" data-aos="fade-in">
                    <h4 class="text-3xl text-api-red font-semibold tracking-widest mb-4">MISSION</h4>
                    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, incidunt dolores laboriosam nostrum voluptates vel, iusto eveniet sequi modi hic autem, earum recusandae. Officia, quibusdam?</p>
                </div>
            </div>
            <div class="grid grid-cols-1 mt-6" data-aos="fade-in">
                <div class="text-center">
                    <h4 class="text-3xl text-api-red font-semibold tracking-widest mb-4">OUR BRAND</h4>
                    <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum esse atque officiis dolor id ut perspiciatis earum hic, dolorum tenetur rerum sequi laudantium ipsum facilis, asperiores porro beatae consequuntur doloribus deleniti quaerat. Tempore quaerat unde nemo ab, optio rem nisi.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10 container mx-auto w-2/3" data-aos="fade-in">
        <h2 class="text-3xl font-extrabold text-white text-center mb-4">OUR TEAM</h2>
        <div class="swiper-container swiper-team border-b-2 border-gray-100  shadow-lg">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('img/frontend/banner/banner_team.png') }}" alt="" class="w-full">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('img/frontend/banner/banner_team.png') }}" alt="" class="w-full">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('img/frontend/banner/banner_team.png') }}" alt="" class="w-full">
                </div>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="py-10 container mx-auto w-2/3">
        <h2 class="text-3xl font-extrabold text-black text-center mb-4">WHERE WE WORK</h2>
        <div class="grid grid-cols-3 mt-6" data-aos="fade-in">
            <div class="border-r border-black pr-6">
                <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quam inventore illum illo quidem? Vero saepe distinctio quia? Harum, quisquam.</p>
            </div>
            <div class="border-r border-l border-black px-6">
                <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quam inventore illum illo quidem? Vero saepe distinctio quia? Harum, quisquam.</p>
            </div>
            <div class="border-l border-black pl-6">
                <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quam inventore illum illo quidem? Vero saepe distinctio quia? Harum, quisquam.</p>
            </div>
        </div>
    </section>

    <section class="py-10 container mx-auto w-2/3" data-aos="fade-in">
        <h2 class="text-3xl font-extrabold text-black text-center mb-4">DISTRIBUTION POINT</h2>
        <img src="{{ asset('img/frontend/distribution_point.png') }}" alt="distribution_point" class="w-full my-4">
        <h5 class="text-2xl font-semibold text-center text-black mb-4 tracking-wider">Head Office</h5>
        <p class="text-center px-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic dolorem voluptates sed dolore esse tenetur, quaerat alias ipsa sint maiores quas, modi error, saepe aliquid commodi deleniti ut illo! Aut enim nam totam quo.</p>
    </section>

    <section class="py-10 container mx-auto w-2/3" data-aos="fade-in">
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
    </section>
@endsection
