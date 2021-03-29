@extends('frontend.layouts.app')

@section('title', app_name() . ' | Product')

@section('content')
<section class="h-300px w-full bg-top bg-no-repeat" style="background-image: url('{{ $category->img_thumb ?: asset('img/frontend/categories/thumbs.jpg') }}');">

    </section>
    <section class="container mx-auto py-10 w-3/4" data-aos="fade-up" data-aos-duration="2000">
        <div class="">
            <div class="flex justify-center w-full">
                <h4 class="text-4xl font-bold tracking-widest">{{ $category->name  }}</h4>
            </div>
        </div>
        <div class="relative my-10 w-full">
            <div class="grid grid-cols-1">
                @foreach ($category->products as $product)
                    <div class="w-full mb-2">
                        <h4 class="text-api-red text-2xl font-bold underline">{{ $loop->iteration }}. {{ $product->name }}</h4>
                        <div class="prose">
                            {!! $product->description !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
