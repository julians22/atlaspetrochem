<div class="relative nonprintable" id="nav-wrapper">
    <nav class="fixed top-0 w-full bg-white z-10 animate__animated animate__faster" id="nav">
        <div class="container mx-auto flex flex-row-reverse sm:flex-row justify-between items-center py-4 px-4 sm:px-2 relative">
            <a class="block" href="{{ route('frontend.index') }}">
                <img src="{{ $setting->config('logo')->first()->value ?: asset('img/frontend/brand/logo.png') }}" class="w-24 sm:w-36"/>
            </a>

            <a href="#" class="block sm:hidden w-6 h-6 left-0 inset-y-0 text-gray-700 p-1 rounded border border-gray-700 hover:border-gray-800 hover:text-gray-800 outline-none" id="menu-toggle">
                <svg class="w-full fill-current" viewBox="0 -53 384 384" xmlns="http://www.w3.org/2000/svg">
                    <path d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/>
                    <path d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/>
                    <path d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/>
                </svg>
            </a>

            <div class="hidden sm:block bg-white absolute inset-x-0 top-full sm:relative py-4 sm:py-0" id="menu-wrapper">
                <ul class="flex flex-col sm:flex-row items-start sm:items-end justify-start font-semibold" id="menu">
                    <li>
                        <a href="{{ route('frontend.index') }}" class="{{ active_class(Route::is('frontend.index'), 'text-api-red', 'hover:text-api-red') }} nav-link">
                            @lang('navs.frontend.home')
                        </a>
                        <span class="spacer"></span>
                    </li>
                    <li class="group dropdown relative">
                        <a href="{{ route('frontend.company') }}" class="{{ active_class(Route::is('frontend.company'), 'text-api-red', 'hover:text-api-red') }} nav-link">
                            @lang('navs.frontend.company')
                        </a>
                        <div class="absolute hidden group-hover:flex bg-white rounded inset-x-0 top-full flex-col shadow items-center p-1 border border-api-redLighten text-xs w-max"  id="company-menu">
                            <div class="dropdown-item">
                                <a href="#vision-mission" class="block w-full">VISI & MISI</a>
                                <span></span>
                            </div>
                            <div class="dropdown-item">
                                <a href="#our-brand" class="block w-full">OUR BRAND</a>
                                <span></span>
                            </div>
                            <div class="dropdown-item">
                                <a href="#our-team" class="block w-full">OUR TEAM</a>
                                <span></span>
                            </div>
                            <div class="dropdown-item">
                                <a href="#our-value" class="block w-full">OUR VALUE</a>
                                <span></span>
                            </div>
                            <div class="dropdown-item">
                                <a href="#work-place" class="block w-full">WHERE WE WORK</a>
                                <span></span>
                            </div>
                        </div>
                        <span class="spacer"></span>
                    </li>
                    {{-- <li>
                        <a href="{{ route('frontend.about') }}" class="{{ active_class(Route::is('frontend.about'), 'text-api-red', 'hover:text-api-red') }} nav-link">
                            ABOUT
                        </a>
                        <span class="spacer"></span>
                    </li> --}}
                    <li class="dropdown group relative">
                        <a href="{{ route('frontend.product') }}" class="{{ active_class(Route::is('frontend.product') || Route::is('frontend.product.list') || Route::is('frontend.show-categories'), 'text-api-red', 'hover:text-api-red') }} nav-link">
                            @lang('navs.frontend.products')
                        </a>
                        <div class="absolute opacity-0 group-hover:opacity-100 bg-white rounded inset-x-0 top-full flex-col flex shadow items-center w-48 p-1 border border-api-redLighten text-xs">
                            @foreach ($main_categories as $main_category)
                            <div class="dropdown-item">
                                <a href="{{ route('frontend.show-categories', ['main_categories' => $main_category->slug]) }}" class="block w-full uppercase
                                    {{ active_class(Request::segment(2) === $main_category->slug, 'text-api-red', 'hover:text-api-red') }}
                                    ">{{ $main_category->name }}</a>
                                <span></span>
                            </div>
                            @endforeach
                        </div>
                        <span class="spacer"></span>
                    </li>
                    <li class="group dropdown relative">
                        <a href="#" class="{{ active_class(Route::is('frontend.article.news.index') || Route::is('frontend.article.galery.index') || Route::is('frontend.article.news.show'), 'text-api-red', 'hover:text-api-red') }} nav-link">
                            @lang('navs.frontend.news-galery')
                        </a>
                        <div class="absolute opacity-0 group-hover:opacity-100 bg-white rounded inset-x-0 top-full flex-col flex shadow items-center w-32 p-1 border border-api-redLighten text-xs">
                            <div class="dropdown-item">
                                <a href="{{ route('frontend.article.news.index') }}" class="block w-full uppercase {{ active_class(Route::is('frontend.article.news.index') || Route::is('frontend.article.news.show'), 'text-api-red', 'hover:text-api-red') }}">@lang('navs.frontend.news')</a>
                                <span></span>
                            </div>
                            <div class="dropdown-item">
                                <a href="{{ route('frontend.article.galery.index') }}" class="block w-full uppercase {{ active_class(Route::is('frontend.article.galery.index'), 'text-api-red', 'hover:text-api-red') }}">@lang('navs.frontend.galery')</a>
                                <span></span>
                            </div>
                        </div>
                        <span class="spacer"></span>
                    </li>
                    <li>
                        <a href="{{ route('frontend.career') }}" class="{{ active_class((Route::is('frontend.career') || Route::is('frontend.career.show')), 'text-api-red', 'hover:text-api-red') }} nav-link">
                            @lang('navs.frontend.careers')
                        </a>
                        <span class="spacer"></span>
                    </li>
                    <li>
                        <a href="{{ route('frontend.contact') }}" class="{{ active_class(Route::is('frontend.contact'), 'text-api-red', 'hover:text-api-red') }} nav-link">@lang('navs.frontend.contact')</a>
                    </li>
                </ul>
            </div>

            <div class="absolute top-0 right-0 z-20 mt-2 mr-6 hidden md:block">
                <ul class="flex items-start justify-around">
                    <li class="mr-4">
                        <a href="{{ route('frontend.alt1') }}" class="px-2 text-xs" target="_blank">Go to Alternative Page 1</a>
                        <a href="{{ route('frontend.alt2') }}" class="px-2 text-xs" target="_blank">Go to Alternative Page 2</a>
                    </li>
                    <li class="mr-4" x-data="{open : false}">
                        <a href="#" class="text-sm relative block link-stores" @click="open = true" :class="{ 'text-api-red': open === true }">
                            <span>(@lang('labels.frontend.online-store.title'))</span>
                        </a>
                        <span class="absolute inset-x-0 w-24 px-2 py-1 top-full rounded-md  transition-all duration-500 flex flex-wrap bg-white shadow-2xl" id="stores-items" x-show="open" @click.away="open = false">
                            <a href="{{ $setting->config('marketplace blibli')->first()->value }}" target="_blank">
                                <img src="{{ asset('img/blibli.jpg') }}" alt="" class="w-full">
                            </a>
                            <a href="{{ $setting->config('marketplace lazada')->first()->value }}" target="_blank">
                                <img src="{{ asset('img/lazada.jpg') }}" alt="" class="w-full">
                            </a>
                        </span>
                    </li>
                    <li class="flex items-center font-semibold text-sm justify-end">
                        @foreach (array_keys(config('locale.languages')) as $lang)
                            @if ($lang == 'en')
                                <a href="{{ '/lang/'.$lang }}"><span class="{{ app()->getLocale() == 'en' ? 'text-api-red' : '' }}">EN</span></a>
                            @elseif($lang == 'id')
                                <a href="{{ '/lang/'.$lang }}"><span class="{{ app()->getLocale() == 'id' ? 'text-api-red' : '' }}">ID</span></a>
                                <span class="border border-black border-opacity-75 h-3 mx-1"></span>
                            @endif
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
