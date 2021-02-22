@extends('frontend.layouts.app')

@section('title', app_name() . ' | News')

@section('content')
    <section class="h-96 w-full bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/frontend/banner/article_banner.jpg') }}');">

    </section>

    <section class="container mx-auto py-10 w-3/4">
        <div class="">
            @livewire('news.news-list-component')
        </div>
    </section>


@endsection
