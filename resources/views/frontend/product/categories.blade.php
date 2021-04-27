@extends('frontend.layouts.app')

@section('title', app_name() . ' | Product')

@section('content')
<section class="w-full h-250px md:h-485px bg-cover bg-center bg-no-repeat" style="background-image: url('{{ $mainCategories->banner_image_location_desktop ? $mainCategories->banner_image_location_desktop : ($bannerPage->image_location_desktop ?: asset('img/frontend/banner/career_banner.jpg')) }}');">

    </section>
    <section class="container mx-auto py-10 w-3/4" data-aos="fade-up" data-aos-duration="2000">
        <div class="">
            <div class="flex justify-center w-full">
                <h4 class="text-4xl font-bold tracking-widest">{{ $mainCategories->name }}</h4>
            </div>
        </div>
        <div class="relative my-10 w-full">
            @if ($mainCategories->categories->count() > 0)
                <div class="grid grid-cols-2">
                    @foreach ($mainCategories->categories as $category)
                        <div class="relative group overflow-hidden">
                            <div class="absolute inset-0 opacity-0 group-hover:opacity-70 bg-api-redDarken flex items-center justify-center transition-all duration-300">
                                <div class="w-60 h-60 border-2 border-white bg-transparent swirl-in-bck group-hover:block hidden"></div>
                            </div>
                            <img src="{{ $category->img_thumb ?: asset('img/frontend/categories/thumbs.jpg') }}" alt="" class="w-full">
                            <a href="{{ route('frontend.product.list', [ 'main_categories' => $category->main_category->slug ,'category'=> $category->slug]) }}" class="absolute inset-0 flex items-center justify-center cursor-pointer">
                                <div class="text-xl font-extrabold text-white w-60 text-center">
                                    <h4 class="mb-2">{{ $category->name }}</h4>
                                    <div class="text-base font-medium">
                                        {!! $category->description !!}
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="font-bold text-api-redLighten text-center text-2xl">
                    Theres no category product for {{ $mainCategories->name }} created.
                </div>
            @endif
        </div>
    </section>
@endsection
