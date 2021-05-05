@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.title'))

@section('content')
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15867.426598005804!2d106.8830731!3d-6.1499462!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1e27cdbb612dd04f!2sPT.%20ATLAS%20PETROCHEM%20INDO!5e0!3m2!1sid!2sid!4v1615344979517!5m2!1sid!2sid" class="h-250px md:h-485px w-full border-0" allowfullscreen="" loading="lazy"></iframe>
    <section class="mx-auto py-10 w-5/6 sm:w-2/3 container">
        <h2 class="text-3xl font-extrabold text-black text-center mb-4">@lang('labels.frontend.contact.box_title')</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 bg-white shadow-md p-4">
            <div class="form-wrapper">
                <form action="" class="w-full flex flex-col">
                    <div class="form-group">
                        <label for="name">@lang('labels.frontend.contact.form.full_name') <span class="mandatory"></span></label>
                        <input type="text" name="name" id="name" class="p-2 w-full focus:outline-none border border-gray-300" placeholder="@lang('labels.frontend.contact.form.placeholder.full_name')">
                    </div>
                    <div class="form-group">
                        <label for="company">@lang('labels.frontend.contact.form.comp') <span class="mandatory"></span></label>
                        <input type="text" name="company" id="company" class="p-2 w-full focus:outline-none border border-gray-300" placeholder="@lang('labels.frontend.contact.form.placeholder.comp')">
                    </div>
                    <div class="form-group">
                        <label for="country">@lang('labels.frontend.contact.form.country') <span class="mandatory"></span></label>
                        <select name="country" id="country" class="w-full p-2 focus:outline-none border border-gray-300">
                            <option selected disabled>@lang('labels.frontend.contact.form.select_country')</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="USA">USA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="phone">@lang('footer.frontend.phone') <span class="mandatory"></span></label>
                        <input type="text" name="phone" id="phone" class="p-2 w-full focus:outline-none border border-gray-300" placeholder="@lang('labels.frontend.contact.form.placeholder.phone')">
                    </div>
                    <div class="form-group">
                        <label for="email">@lang('labels.frontend.career.form.email') <span class="mandatory"></span></label>
                        <input type="text" name="email" id="email" class="p-2 w-full focus:outline-none border border-gray-300" placeholder="@lang('labels.frontend.contact.form.placeholder.email')">
                    </div>
                    <div class="form-group">
                        <label for="reason">@lang('labels.frontend.contact.form.contact_reason') <span class="mandatory"></span></label>
                        <select name="reason" id="reason" class="w-full p-2 focus:outline-none border border-gray-300">
                            <option selected disabled>@lang('labels.frontend.contact.form.choose_contact_reason')</option>
                            <option value="Indonesia">1</option>
                            <option value="Malaysia">2</option>
                            <option value="USA">3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="subject">@lang('labels.frontend.contact.form.subject') <span class="mandatory"></span></label>
                        <input type="text" name="subject" id="subject" class="p-2 w-full focus:outline-none border border-gray-300" placeholder="@lang('labels.frontend.contact.form.placeholder.subject')">
                    </div>

                    <div class="form-group">
                        <label for="message">@lang('labels.frontend.contact.form.question_comment') <span class="mandatory"></span></label>
                        <textarea name="message" class="focus:outline-none p-2 w-full border border-gray-300" id="message" cols="6" rows="10" placeholder="@lang('labels.frontend.contact.form.placeholder.question_comment')"></textarea>
                    </div>

                    <button class="bg-api-red self-end text-white hover:bg-api-redDarken p-1">@lang('labels.frontend.contact.button')</button>
                </form>
            </div>

            <div class="faq-wrapper">
                <h4 class="text-xl text-api-red font-bold tracking-widest mb-4">@lang('labels.frontend.contact.faq')</h4>
                <ul class="flex flex-col">
                    @foreach ($faqs as $faq)
                        <li class="mb-4 border-b-2 border-black">
                            <div x-data="{ faqOpen : null}">
                                <h4 class="text-lg text-black font-semibold tracking-widest cursor-pointer" @click="faqOpen !== {{ $loop->iteration }} ? faqOpen = {{ $loop->iteration }} : faqOpen = null"">{!! $faq->question_text !!}</h4>
                                <div class="transition-all duration-700 max-h-0 overflow-hidden bg-white" x-ref="faq{{$loop->iteration}}" x-bind:style="faqOpen == {{$loop->iteration}} ? 'max-height: ' + $refs.faq{{$loop->iteration}}.scrollHeight + 'px' : ''">
                                    <p class="mb-2">{!! $faq->answer_text !!}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>

    </section>
@endsection

{{-- @push('after-scripts')
    @if(config('access.captcha.contact'))
        @captchaScripts
    @endif
@endpush --}}
