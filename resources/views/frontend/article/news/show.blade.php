@extends('frontend.layouts.app')

@section('title', app_name() . ' | '. $news->title)

@section('meta_description', $news->intro)

@section('meta')
    <meta property="og:url"           content="{{ route('frontend.article.news.show', ['slug' => $news->slug]) }}" />
    <meta property="og:type"          content="Website" />
    <meta property="og:title"         content="{{ $news->title }}" />
    <meta property="og:description"   content="{!! $news->intro !!}" />
    <meta property="og:image"         content="{{ $news->featured_image ? $news->featured_image : asset('img/frontend/news_img_1.jpg') }}" />

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ route('frontend.article.news.show', ['slug' => $news->slug]) }}">
    <meta property="twitter:title" content="{{ $news->title }}">
    <meta property="twitter:description" content="{!! $news->intro !!}">
    <meta property="twitter:image" content="{{ $news->featured_image ? $news->featured_image : asset('img/frontend/news_img_1.jpg') }}">
@endsection

@section('content')
    <section class="w-full h-250px md:h-485px bg-cover bg-center bg-no-repeat nonprintable" style="background-image: url('{{ $bannerPage->image_location_desktop ?: asset('img/frontend/banner/article_banner.jpg') }}');">

    </section>

    <section class="container mx-auto py-10 w-3/4 printable" id="news-section">
        <div class="flex justify-between w-full">
            <h4 class="text-4xl font-bold">NEWS</h4>
        </div>

        <div class="flex justify-between my-10">
            <div class="w-4/12 h-80">
                <div class="w-full h-full  bg-no-repeat bg-cover bg-center" style="background-image: url('{{ $news->featured_image ? $news->featured_image : asset('img/frontend/news_img_1.jpg') }}')"></div>
            </div>

            <div class="w-7/12">
                <h4 class="font-bold text-2xl italic block">{{ $news->title }}</h4>
                <span class="text-gray-500 mb-4"> {{ $news->created_at->format('d F Y') }}</span>
                <div>
                    {!! $news->intro !!}
                </div>
            </div>
        </div>

        <div class="w-full">
            {!! $news->value !!}
        </div>

        <div class="flex mt-10 md:flex-row flex-col nonprintable">
            {{-- <div class="fb-share-button" data-href="{{ route('frontend.article.news.show', ['slug'=>$news->slug]) }}" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Bagikan</a></div> --}}
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('frontend.article.news.show', ['slug'=>$news->slug]) }}" class="bg-blue-700 text-white text-center px-5 py-2 mr-2 w-32" target="_blank">
                <i class="fab fa-facebook-f mr-2"></i>Share
            </a>
            <a href="https://twitter.com/intent/tweet?text={{ $news->title }}&url={{ route('frontend.article.news.show', ['slug'=>$news->slug]) }}&hashtags=atlaspetrochemindo" target="blank" class="bg-blue-400 text-white text-center px-5 py-2 mr-2 w-32">
                <i class="fab fa-twitter mr-2"></i>Tweet
            </a>
            <a href="https://web.whatsapp.com//send?text={{ route('frontend.article.news.show', ['slug'=>$news->slug]) }}" target="_blank" class="bg-green-400 text-white text-center px-5 py-2 mr-2 w-32">
                <i class="fab fa-whatsapp"></i>
            </a>
            <a href="mailto:?subject={{ $news->title }}&amp;body=Check out this site {{ route('frontend.article.news.show', ['slug'=>$news->slug]) }}" class="bg-gray-500 text-white text-center px-5 py-2 mr-2 w-32">
                <i class="fas fa-envelope"></i>
            </a>
            <a href="#" onclick="window.print()" class="bg-black text-white text-center px-5 py-2 w-32">
                <i class="fas fa-print"></i>
            </a>
        </div>
    </section>
@endsection

@push('after-scripts')
@endpush