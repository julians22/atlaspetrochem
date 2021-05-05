<footer class="w-full pt-4 md:pt-6 text-white bg-gradient-to-b from-api-red to-api-redDarken nonprintable">
    <div class="container mx-auto w-3/4 ">
        <div class="flex flex-col md:flex-row w-full">
            <div class="box-1 flex flex-col justify-between w-full md:w-2/5 pr-0 md:pr-10">
                <h4 class="company-name text-base font-semibold md:mb-4">PT. {{ app_name() }}</h4>
                <div class="address mb-4 text-sm font-medium">
                    <h4 class="font-italic">@lang('footer.frontend.head-office'):</h4>
                    <p>{!! workplace_format($setting->config('head office')->first()->value) !!}</p>
                </div>
                <p class="phone text-sm font-medium mb-4">@lang('footer.frontend.phone'). <a href="tel:{{ $setting->config('mobile phone')->first()->value }}" class="no-underline">{{ $setting->config('mobile phone')->first()->value }}</a></p>
                <p class="website text-sm font-medium"><a href="#" class="no-underline">www.atlaspetrochem.co.id</a></p>
            </div>

            <div class="box-2 flex flex-col justify-between w-full  md:w-1/5 text-sm font-medium mt-4 md:mt-0">
                <a href="{{ route('frontend.company') }}" class="block">@lang('navs.frontend.company')</a>
                <a href="{{ route('frontend.product') }}" class="block">@lang('navs.frontend.products')</a>
                <a href="{{ route('frontend.article.news.index') }}" class="block">@lang('navs.frontend.news-galery')</a>
                <a href="{{ route('frontend.career') }}" class="block">@lang('navs.frontend.careers')</a>
                <a href="{{ route('frontend.contact') }}" class="block">@lang('navs.frontend.contact')</a>
            </div>

            <div class="box-3 flex flex-col justify-between w-full md:w-2/5 md:pr-10 md:mt-0 mt-4">
                <h4 class="text-lg">@lang('footer.frontend.need-assist')</h4>
                <a href="tel:{{ $setting->config('phone')->first()->value }}" class="border-2 border-white py-1 px-2 inline-flex items-center font-semibold text-xl">
                    <span class="w-8 mr-4">
                        <img src="{{ asset('img/frontend/icons/phone_icons.png') }}" alt="" class="w-full">
                    </span>
                    <span>{{ $setting->config('phone')->first()->value }}</span>
                </a>
                <a href="mailto:{{ $setting->config('helpdesk email')->first()->value }}" class="border-2 border-white py-1 px-2 inline-flex items-center font-semibold text-xl">
                    <span class="w-8 mr-4">
                        <img src="{{ asset('img/frontend/icons/email_icons.png') }}" alt="" class="w-full">
                    </span>
                    <span>@lang('footer.frontend.helpdesk-email')</span>
                </a>
                <ul class="flex items-center mt-2 md:mt-0">
                    <li class="mr-2">
                        <span class="block">@lang('labels.frontend.online-store.title'):</span>
                    </li>
                    <li class="mr-2">
                        <a href="//{{ $setting->config('marketplace blibli')->first()->value }}" target="_blank"><span class="w-12 block"><img src="{{ asset('img/blibli.jpg') }}" alt="" class="w-full"></span></a>
                    </li>
                    <li>
                        <a href="//{{ $setting->config('marketplace lazada')->first()->value }}" target="_blank"><span class="w-12 block"><img src="{{ asset('img/lazada.jpg') }}" alt="" class="w-full"></span></a>
                    </li>
                </ul>
            </div>
        </div>

        <p class="text-center text-xs pb-2 pt-6">Copyrights &copy; 2021 PT Atlas Petrochem Indo. All rights reserved</p>
    </div>
</footer>
