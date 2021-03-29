@extends('frontend.layouts.app')

@section('title', app_name() . ' | Product')

@section('content')
<section class="h-250px sm:h-96 w-full bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/frontend/banner/career_banner.jpg') }}');">

    </section>
    <section class="container mx-auto py-10 w-3/4" data-aos="fade-up" data-aos-duration="2000">
        <div class="">
            <div class="flex justify-center w-full">
                <h4 class="text-4xl font-bold tracking-widest">DIVISI INDUSTRIAL</h4>
            </div>
        </div>
        <div class="relative my-10 w-full">
            <div class="grid grid-cols-2">
                @foreach ($categoriesIndustrial as $industrial)
                    <div class="relative group overflow-hidden">
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-70 bg-api-redDarken flex items-center justify-center transition-all duration-300">
                            <div class="w-60 h-60 border-2 border-white bg-transparent swirl-in-bck group-hover:block hidden"></div>
                        </div>
                        <img src="{{ $industrial->img_thumb ?: asset('img/frontend/categories/thumbs.jpg') }}" alt="" class="w-full">
                        <a href="{{ route('frontend.product.list', ['category'=> $industrial->slug, 'division' => $industrial->division]) }}" class="absolute inset-0 flex items-center justify-center cursor-pointer">
                            <div class="text-xl font-extrabold text-white w-60 text-center">
                                <h4 class="mb-2">{{ $industrial->name }}</h4>
                                <div class="text-base font-medium">
                                    {!! $industrial->description !!}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
