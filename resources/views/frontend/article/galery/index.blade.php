@extends('frontend.layouts.app')

@section('title', app_name() . ' | Galery')

@section('content')
    <section class="h-96 w-full bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/frontend/banner/article_banner.jpg') }}');">

    </section>

    <section class="container mx-auto py-10 w-3/4">
        <div class="">
            <div class="flex justify-between w-full">
                <h4 class="text-4xl font-bold">GALERY</h4>

            </div>
        </div>

        <div class="grid grid-cols-3 mt-10 gap-x-8 gap-y-4">
            @foreach ($galeries as $galery)
                <div>
                    <div class="mb-2 bg-cover bg-center bg-no-repeat h-72 w-full" style="background-image: url('{{ $galery->thumbnail_location ? $galery->thumbnail_location : asset('img/frontend/news_img_1.jpg') }}')"></div>
                    <h4 class="block text-center font-semibold mb-2">{{ $galery->title }}</h4>
                </div>
            @endforeach
        </div>
    </section>
@endsection
