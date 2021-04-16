@extends('frontend.layouts.app')

@section('title', app_name() . ' | Categories')

@section('content')
    <section class="py-6" data-aos="fade-up" data-aos-duration="2000">
        <h4 class="text-2xl font-bold text-center tracking-widest">THE LEADING LUBRICANT</h4>
        <h5 class="text-xl font-semibold text-gray-800 text-center tracking-widest">FROM JAPAN</h5>
        <div class="w-full mx-auto relative mt-4">
            <img src="{{ asset('img/frontend/oil_bottle.png') }}" class="w-3/4 mx-auto" alt="lubricant.png">

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
@endsection
