<div class="relative" id="nav-wrapper">
    <nav class="fixed top-0 w-full bg-white z-10 animate__animated animate__faster" id="nav">
        <div class="container mx-auto flex flex-row-reverse sm:flex-row justify-between items-center py-4 px-4 sm:px-2 relative">
            <a class="block" href="{{ route('frontend.index') }}">
                <img src="{{ asset('img/frontend/brand/logo.png') }}" class="w-24 sm:w-36"/>
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
                    <li class="group dropdown flex items-center flex-col">
                        <a href="#" class="{{ active_class((Route::is('frontend.article.news.index') || (Route::is('frontend.article.galery.index'))), 'text-api-red', 'hover:text-api-red') }}">
                            NEWS & GALERY
                        </a>
                        <ul class="relative sm:absolute h-0 sm:h-auto group-hover:h-auto inset-0 mt-0 sm:mt-6 text-center sm:text-left opacity-0 group-hover:opacity-100 transition-transform duration-200 ease-in-out">
                            <li class="border-b sm:border-t border-black block">
                                <a href="{{ route('frontend.article.news.index') }}" class="{{ active_class(Route::is('frontend.article.news.index'), 'text-api-red', 'hover:text-api-red') }}">NEWS</a>
                            </li>
                            <li class="border-b sm:border-t border-black block">
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
            </div>

            <div class="absolute top-0 right-0 z-20 mt-2 mr-6 hidden md:block">
                <ul class="flex items-start justify-around">
                    <li class="mr-4 group">
                        <a href="#" class="text-sm relative block">
                            <span>(Online Store)</span>
                        </a>
                        <span class="absolute inset-x-0 w-24 px-2 py-1 top-full rounded-md opacity-0 group-hover:opacity-100 transition-all duration-500 flex flex-wrap bg-white shadow-2xl">
                            <a href="#">
                                <img src="{{ asset('img/blibli.jpg') }}" alt="" class="w-full">
                            </a>
                            <a href="#">
                                <img src="{{ asset('img/lazada.jpg') }}" alt="" class="w-full">
                            </a>
                        </span>
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


@push('after-scripts')
<script>


</script>
@endpush
