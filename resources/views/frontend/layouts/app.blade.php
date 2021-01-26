<!DOCTYPE html>
@langrtl
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
@else
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endlangrtl
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', 'Laravel Boilerplate')">
        <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
        @yield('meta')

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,800;1,400;1,500;1,600;1,800&display=swap" rel="stylesheet">

        {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
        @stack('before-styles')

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        {{ style(mix('css/tailwind.css')) }}
        {{ style(mix('css/frontend.css')) }}

        @stack('after-styles')
    </head>
    <body>
        
        <div id="app">
            @include('frontend.includes.nav')
            @include('includes.partials.read-only')
            @include('includes.partials.logged-in-as')

            @yield('banner')
            @include('includes.partials.messages')
            @yield('content')

            @include('frontend.includes.footer')
        </div><!-- #app -->

        <a href="#" class="w-14 transition duration-700 transform hover:-translate-y-1 hover:scale-110 ease-in-out fixed bottom-6 right-6">
            <img src="{{ asset('img/frontend/icons/whatsapp_icons.png') }}" alt="" class="w-full">
        </a>

        <!-- Scripts -->
        @stack('before-scripts')
        {!! script(mix('js/manifest.js')) !!}
        {!! script(mix('js/vendor.js')) !!}
        {!! script(mix('js/frontend.js')) !!}
        @stack('after-scripts')

        @include('includes.partials.ga')
    </body>
</html>
