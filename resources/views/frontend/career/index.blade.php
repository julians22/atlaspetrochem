@extends('frontend.layouts.app')

@section('title', app_name() . ' | Career')

@section('content')
    <section class="h-250px sm:h-96 w-full bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/frontend/banner/career_banner.jpg') }}');">

    </section>

    <section class="container mx-auto py-10 w-3/4">
        <div class="">
            <div class="flex justify-center w-full">
                <h4 class="text-4xl font-bold tracking-widest">CAREER OPPORTUNITIES</h4>
            </div>
        </div>

        <div class="my-10">
            @foreach ($careers as $career)
                <div class="w-full flex mb-6">
                    <div class="w-6 h-6 mr-4">
                        <span class="bg-gradient-to-br from-api-redDarken to-api-red w-full h-full block"></span>
                    </div>

                    <div class="w-full">
                        <h4 class="text-2xl font-semibold leading-none mb-2">{{ $career->position }}</h4>
                        <div class="mb-2 prose max-w-full">{!! $career->job_desk !!}</div>
                        <a href="{{ route('frontend.career.show', ['career_id'=> $career->uuid]) }}" class="px-4 py-1 rounded-md shadow-3xl bg-api-red hover:bg-api-redDarken transition-colors duration-300 text-white font-semibold">Apply Now>></a>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- <div class="grid grid-cols-3 mt-10 gap-x-8 gap-y-4">
            @foreach ($galeries as $galery)
                <div>
                    <div class="mb-2 bg-cover bg-center bg-no-repeat h-72 w-full" style="background-image: url('{{ $galery->thumbnail_location ? $galery->thumbnail_location : asset('img/frontend/news_img_1.jpg') }}')"></div>
                    <h4 class="block text-center font-semibold mb-2">{{ $galery->title }}</h4>
                </div>
            @endforeach
        </div> --}}
    </section>
@endsection
