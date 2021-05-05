@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.frontend.news'))

@section('content')
    <section class="w-full h-250px md:h-485px bg-cover bg-center bg-no-repeat" style="background-image: url('{{ $bannerPage->image_location_desktop ?:asset('img/frontend/banner/article_banner.jpg') }}');">

    </section>

    <section class="container mx-auto py-10 w-4/5 sm:w-3/4">
        <div class="">
            @livewire('news.news-list-component')
        </div>
    </section>


@endsection
