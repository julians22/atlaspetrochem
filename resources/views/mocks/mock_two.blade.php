@extends('mocks.layout.app')

@section('title', app_name() . ' | ' . __('Mock Up Two'))

@section('content')
    <div id="mock-2" class="relative">
        <video autoplay="autoplay" muted="muted" playsinline loop="loop" id="myVideo" style="
                min-width: 100%;">
            <source src="{{ asset('video/ALT02 (Converted)1080p.mp4') }}"  type="video/mp4">
        </video>

        <div class="content">
            <img src="{{ asset('img/mocks/partial/foots_2.jpg') }}" alt="" class="w-full">
        </div>
    </div>
@endsection