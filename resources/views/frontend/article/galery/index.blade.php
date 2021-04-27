@extends('frontend.layouts.app')

@section('title', app_name() . ' | Galery')

@push('after-styles')
    <link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet"/>
@endpush
@push('before-scripts')
    <script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
@endpush

@section('content')
    <section class="w-full h-250px md:h-485px bg-cover bg-center bg-no-repeat" style="background-image: url('{{ $bannerPage->image_location_desktop ?:asset('img/frontend/banner/article_banner.jpg') }}');">

    </section>

    <section class="container mx-auto py-10 w-3/4">
        <div class="flex justify-between w-full">
            <h4 class="text-4xl font-bold">GALERY</h4>
        </div>

        <div class="mt-4">
            @livewire('frontend.galeries.picture-component')
        </div>

        <div class="mt-4">
            @livewire('frontend.galeries.video-component')
        </div>
    </section>
@endsection
