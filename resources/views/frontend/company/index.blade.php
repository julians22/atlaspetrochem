@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.frontend.company'))

@push('after-scripts')
    <style>
        .company-wrapper .prose ol > li::before {
            color: inherit;
        }
        .company-wrapper .prose *{
            color: inherit;
        }
    </style>
@endpush

@section('content')
    <section class="relative w-full company-wrapper pb-8">
        <div class="container w-2/3 mx-auto">
            @include('frontend.includes.banner-company')

            <div class="grid grid-cols-2 mt-6" id="vision-mission">
                <div class="border-r border-white px-4" data-aos-once="true" data-aos="fade-up" data-aos-duration="1000">
                    <h4 class="text-3xl text-center text-api-red font-semibold tracking-widest mb-4 uppercase">@lang('labels.frontend.company.vision')</h4>
                    <div class="prose text-white">{!! $vision_content->value !!}</div>
                </div>
                <div class="border-l border-white px-4" data-aos-once="true" data-aos="fade-up" data-aos-duration="1000">
                    <h4 class="text-3xl text-center text-api-red font-semibold tracking-widest mb-4">@lang('labels.frontend.company.mission')</h4>
                    <div class="prose text-white">{!! $mission_content->value !!}</div>
                </div>
            </div>
            <div class="grid grid-cols-1 mt-6" id="our-brand">
                <div class="w-full" data-aos-once="true" data-aos="fade-up" data-aos-duration="1000">
                    <h4 class="text-3xl text-center text-api-red font-semibold tracking-widest mb-4">@lang('labels.frontend.company.our-brand')</h4>
                    <div class="text-white prose max-w-full">{!! $brand_content->value !!}</div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10 container mx-auto w-2/3" id="our-team">
        <div class="w-full" data-aos-once="true" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-3xl font-extrabold text-white text-center mb-4">@lang('labels.frontend.company.our-team')</h2>
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
        </div>

        <div class="py-10" id="our-value">
            <h2 class="text-3xl font-extrabold text-black text-center mb-4">@lang('labels.frontend.our-value.title')</h2>

            @foreach ($abouts as $about)
                <div class="w-full mb-10" id="about-{{ Str::slug($about->title) }}">
                    <div class="flex justify-center items-center flex-wrap
                    {{ $loop->iteration % 2 == 0 ? 'flex-row-reverse' : 'flex-row'  }}
                    " data-aos-once="true" data-aos="fade-up" data-aos-duration="1000">
                        <div class="w-full sm:w-1/2 px-0 sm:px-4 relative">
                            <h4 class="font-bold text-api-red mb-2 text-3xl">{{ $about->title }}</h4>
                            <div class="prose prose-sm sm:prose lg:prose-lg xl:prose-xl">
                                {!! $about->content !!}
                            </div>
                        </div>
                        <div class="w-full sm:w-1/2 px-0 sm:px-4">
                            <img src="{{ $about->featured_image_location ?: '/img/frontend/background/company_bg.png'}}" alt="" class="w-full">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="py-10 w-full" id="work-place">

            <h2 class="text-3xl font-extrabold text-black text-center mb-4">@lang('labels.frontend.company.where-we-work')</h2>
            {{-- <div class="grid grid-cols-3 mt-6">
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
            </div> --}}

            <div class="grid grid-cols-3 gap-x-4 py-2">
                @foreach (json_decode($workplace_content->value) as $workplace)
                    <div class="p-4 bg-white rounded shadow-md" data-aos-once="true" data-aos="fade-up" data-aos-delay="{{ $loop->iteration }}00">
                        <div class="leading-6 w-full tracking-tight">
                            {!! workplace_format($workplace) !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="container mx-auto w-2/3 pb-5" data-aos-once="true" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="text-3xl font-extrabold text-black text-center mb-4">@lang('labels.frontend.company.distribution-point')</h2>
        <img src="{{ asset('img/frontend/dispoint.jpg') }}" alt="distribution_point" class="w-full my-4">
        {{-- <h5 class="text-2xl font-semibold text-center text-black mb-4 tracking-wider">Head Office</h5>
        <p class="text-center px-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic dolorem voluptates sed dolore esse tenetur, quaerat alias ipsa sint maiores quas, modi error, saepe aliquid commodi deleniti ut illo! Aut enim nam totam quo.</p> --}}
    </section>
@endsection
