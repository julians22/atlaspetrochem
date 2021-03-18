<div class="relative" id="nav-wrapper">
    <nav class="fixed top-0 w-full bg-white z-10 animate__animated animate__faster" id="nav">
        <div class="container mx-auto flex justify-between items-center py-4 px-2 relative">
            <a class="block" href="{{ route('frontend.index') }}">
                <img src="{{ asset('img/frontend/brand/logo.png') }}" class="w-36"/>
            </a>

            <ul class="flex items-end justify-start font-semibold" id="menu">
                <li>
                    <a href="{{ route('frontend.index') }}" class="{{ active_class(Route::is('frontend.index'), 'text-api-red', 'hover:text-api-red') }}">
                        HOME
                    </a>
                    <span></span>
                </li>
                <li>
                    <a href="{{ route('frontend.company') }}" class="{{ active_class(Route::is('frontend.company'), 'text-api-red', 'hover:text-api-red') }}">
                        COMPANY
                    </a>
                    <span></span>
                </li>
                <li>
                    <a href="{{ route('frontend.product') }}" class="{{ active_class(Route::is('frontend.product'), 'text-api-red', 'hover:text-api-red') }}">
                        PRODUCTS
                    </a>
                    <span></span>
                </li>
                <li class="group dropdown">
                    <a href="#" class="{{ active_class((Route::is('frontend.article.news.index') || (Route::is('frontend.article.galery.index'))), 'text-api-red', 'hover:text-api-red') }}">
                        NEWS & GALERY
                    </a>
                    <ul class="absolute inset-0 mt-6 text-left opacity-0 group-hover:opacity-100 transition-transform duration-200 ease-in-out">
                        <li class="border-t border-black block">
                            <a href="{{ route('frontend.article.news.index') }}" class="{{ active_class(Route::is('frontend.article.news.index'), 'text-api-red', 'hover:text-api-red') }}">NEWS</a>
                        </li>
                        <li class="border-t border-black block">
                            <a href="{{ route('frontend.article.galery.index') }}" class="{{ active_class(Route::is('frontend.article.galery.index'), 'text-api-red', 'hover:text-api-red') }}">GALERY</a>
                        </li>
                    </ul>
                    <span></span>
                </li>
                <li>
                    <a href="{{ route('frontend.career') }}" class="{{ active_class((Route::is('frontend.career') || Route::is('frontend.career.show')), 'text-api-red', 'hover:text-api-red') }}">
                        CAREERS
                    </a>
                    <span></span>
                </li>
                <li>
                    <a href="{{ route('frontend.contact') }}" class="{{ active_class(Route::is('frontend.contact'), 'text-api-red', 'hover:text-api-red') }}">CONTACT US</a>
                </li>
            </ul>

            <div class="absolute top-0 right-0 z-20 mt-2 mr-6 hidden md:block">
                <ul class="flex items-start justify-around">
                    <li class="mr-4">
                        <a href="" class="text-sm">
                            (Online Store)
                        </a>
                    </li>
                    <li class="flex items-center font-semibold text-sm justify-end">
                        @foreach (array_keys(config('locale.languages')) as $lang)
                            @if ($lang == 'en')
                                <a href="{{ '/lang/'.$lang }}"><span class="{{ app()->getLocale() == 'en' ? 'text-api-red' : '' }}">EN</span></a>
                                <span class="border border-black border-opacity-75 h-3 mx-1"></span>
                            @elseif($lang == 'id')
                                <a href="{{ '/lang/'.$lang }}"><span class="{{ app()->getLocale() == 'id' ? 'text-api-red' : '' }}">ID</span></a>
                            @endif
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
