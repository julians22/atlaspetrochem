@extends('mocks.layout.app')

@section('title', app_name() . ' | ' . __('Mock Up One'))

@section('content')
    <div id="mock-1">
        <nav class="fixed top-0 inset-x-0 p-4 z-50">
            <div class="flex container mx-auto justify-between items-center px-2 sm:px-2 md:px-4 lg:px-5 xl:px-6 2xl:px-10">
                <a href="" class="block">
                    <img src="{{ $setting->config('logo')->first()->value ?: asset('img/frontend/brand/logo.png') }}" class="w-36 sm:w-40"/>
                </a>

                <div class="text-white font-semibold flex">
                    <ul class="flex items-center bg-gray-700 rounded-full min-w-330px p-2 justify-around shadow-md ">
                        <li>HOME</li>
                        <li>COMPANY</li>
                        <li>CONTACT</li>
                    </ul>

                    <span class="bg-api-red ml-2 p-2 rounded-full flex items-center">
                        ONLINE STORE
                    </span>
                </div>
            </div>
        </nav>
        <div class="layout">
            <div class="outer">
                <div class="inner" style="background-image: url('{{ asset('img/mocks/background/asset_mock_1.png') }}')"></div>
                <img src="{{ asset('img/mocks/partial/cloud-top-1.png') }}" alt="" class="partial cloud-top-1 filter drop-shadow-xl">
                <img src="{{ asset('img/mocks/partial/cloud-top-2.png') }}" alt="" class="partial cloud-top-2 filter drop-shadow-xl">
                <img src="{{ asset('img/mocks/partial/ALT1-balon.png') }}" alt="" class="partial baloon filter drop-shadow-sm">
                <img src="{{ asset('img/mocks/partial/cloud-bottom-1.png') }}" alt="" class="partial cloud-bottom-1 filter drop-shadow-xl">
                <img src="{{ asset('img/mocks/partial/cloud-bottom-2.png') }}" alt="" class="partial cloud-bottom-2 filter drop-shadow-xl">
                <img src="{{ asset('img/mocks/partial/ALT1-pesawat.png') }}" alt="" class="partial plane filter drop-shadow-2xl">
                <img src="{{ asset('img/mocks/partial/ALT1-webAtlasPetrochemIndo-04.png') }}" alt="" class="partial">

                <div class="text-open text-center" data-aos="slide-down" data-aos-duration="1500">
                    <div class="text-green-500">
                        <span class="block" data-aos="fade-right" data-aos-duration="1000" data-aos-anchor=".text-open">GREENER</span>
                        <span class="block" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300" data-aos-anchor=".text-open">QUALITY</span>
                    </div>

                    <div class="text-gray-700">
                        <span class="block" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400" data-aos-anchor=".text-open">PRODUCT</span>
                        <span class="block" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500" data-aos-anchor=".text-open">SUPPLY</span>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- #mock-1 -->
@endsection
