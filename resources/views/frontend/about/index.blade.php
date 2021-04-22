@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('About'))

@section('content')
    <section class="h-250px sm:h-96 w-full bg-cover bg-center bg-no-repeat" style="background-image: url('{{ $bannerPage->image_location_desktop ?:asset('img/frontend/banner/article_banner.jpg') }}');">

    </section>

    <section class="container mx-auto py-10 w-3/4">
        <div class="">
            <div class="flex justify-center w-full">
                <h4 class="text-4xl font-bold tracking-widest">ABOUT</h4>
            </div>
        </div>

        <div class="my-10">
            @foreach ($abouts as $about)
                <div class="w-full mb-10" id="about-{{ $loop->iteration }}" data-aos="fade-up" data-aos-duration="1000">
                    <div class="flex justify-center items-center flex-wrap
                    {{ $loop->iteration % 2 == 0 ? 'flex-row-reverse' : 'flex-row'  }}
                    ">
                        <div class="w-full sm:w-1/2 px-0 sm:px-4 relative">
                            <h4 class="font-bold text-api-red mb-2 text-3xl">{{ $about->title }}</h4>
                            <div class="prose">
                                {!! $about->content !!}
                            </div>
                        </div>
                        <div class="w-full sm:w-1/2 px-0 sm:px-4">
                            {{-- <div class="w-full max-h-72 h-screen bg-no-repeat bg-cover bg-top" style="background-image: url('{{ $about->featured_image_location ?: '/img/frontend/background/company_bg.png'}}')">

                            </div> --}}
                            <img src="{{ $about->featured_image_location ?: '/img/frontend/background/company_bg.png'}}" alt="" class="w-full">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        </div>
    </section>
@endsection
