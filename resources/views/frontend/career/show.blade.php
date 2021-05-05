@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.career.box_title'))

@section('content')
    <section class="w-full h-250px md:h-485px bg-cover bg-center bg-no-repeat" style="background-image: url('{{ $bannerPage->image_location_desktop ?: asset('img/frontend/banner/career_banner.jpg') }}');">

    </section>

    <section class="container mx-auto py-10 w-3/4">
        <div class="flex justify-center w-full">
            <h4 class="text-4xl font-bold tracking-wide">{{ $career->position }}</h4>
        </div>

        <div class="my-10 flex justify-between">

            <div class="w-3/5 block"> <!-- leftside -->
                <div class="w-full flex mb-6">
                    <div class="w-6 h-6 mr-4">
                        <span class="bg-gradient-to-br from-api-redDarken to-api-red w-full h-full block"></span>
                    </div>

                    <div class="w-full">
                        <h4 class="text-2xl font-semibold leading-none mb-2">@lang('labels.frontend.career.job_desk')</h4>
                        <div class="mb-2">{!! $career->job_desk !!}</div>
                    </div>
                </div>

                <div class="w-full flex mb-6">
                    <div class="w-6 h-6 mr-4">
                        <span class="bg-gradient-to-br from-api-redDarken to-api-red w-full h-full block"></span>
                    </div>

                    <div class="w-full">
                        <h4 class="text-2xl font-semibold leading-none mb-2">@lang('labels.frontend.career.reqs')</h4>
                        <div class="prose prose-sm sm:prose lg:prose-lg xl:prose-xle">
                            {!! $career->requirements !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-2/5 block"> <!-- right side -->
                <div class="w-full flex mb-6">
                    <div class="w-6 h-6 mr-4">
                        <span class="bg-gradient-to-br from-api-redDarken to-api-red w-full h-full block"></span>
                    </div>

                    <div class="w-full">
                        <h4 class="text-2xl font-semibold leading-none mb-2">@lang('FORM')</h4>
                        <form action="{{ route('frontend.career.send', ['career_id' => $career->uuid]) }}" method="post" class="w-full mt-6" enctype="multipart/form-data">
                            @csrf
                            <div class="flex items-center mb-2">
                                <label for="name" class="block w-24">@lang('labels.frontend.career.form.name') *</label>
                                <input required type="text" name="name" id="name" class="w-full focus:outline-none p-2">
                            </div>
                            <div class="flex items-center mb-2">
                                <label for="gender" class="block w-24">@lang('labels.frontend.career.form.gender') *</label>
                                <select required name="gender" id="gender" class="w-full focus:outline-none p-2">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="flex items-center mb-2">
                                <label for="email" class="block w-24">@lang('labels.frontend.career.form.email') *</label>
                                <input required type="email" name="email" id="email" class="w-full focus:outline-none p-2">
                            </div>
                            <div class="flex items-center mb-2">
                                <label for="phone" class="block w-24">@lang('labels.frontend.career.form.phone') *</label>
                                <input required type="tel" name="phone" id="phone" class="w-full focus:outline-none p-2">
                            </div>

                            <input type="file" name="cv_file" id="cv_file" class="hidden">
                            <label for="cv_file" class="inline-block bg-api-red rounded-md p-y-1 px-2 hover:bg-api-redDarken cursor-pointer text-white my-4">@lang('labels.frontend.career.form.upload-cv')*</label>

                            <div class="flex flex-col mb-2">
                                <label for="message" class="block">Message</label>
                                <textarea name="message" id="message" rows="4" class="w-full focus:outline-none p-2 block"></textarea>
                            </div>
                            <div class="flex items-center mb-2">
                                <input type="checkbox" name="terms" id="terms" class="mr-2"><label for="terms" class="text-xs">@lang('labels.frontend.career.form.terms')</label>
                            </div>

                            <button class="float-right bg-api-red hover:bg-api-redDarken transition-all duration-500 rounded-sm px-4 shadow-3xl text-white focus:outline-none focus:ring-1 focus:ring-offset-api-redLighten">@lang('buttons.frontend.career.apply-now') >></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
