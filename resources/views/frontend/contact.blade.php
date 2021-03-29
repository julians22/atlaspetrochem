@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15867.426598005804!2d106.8830731!3d-6.1499462!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1e27cdbb612dd04f!2sPT.%20ATLAS%20PETROCHEM%20INDO!5e0!3m2!1sid!2sid!4v1615344979517!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <section class="mx-auto py-10 w-5/6 sm:w-2/3 container">
        <h2 class="text-3xl font-extrabold text-black text-center mb-4">CONTACT US</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 bg-white shadow-md p-4">
            <div class="form-wrapper">
                <form action="" class="w-full flex flex-col">
                    <div class="form-group">
                        <label for="name">Full Name <span class="mandatory"></span></label>
                        <input type="text" name="name" id="name" class="p-2 w-full focus:outline-none border border-gray-300" placeholder="Your Full Name">
                    </div>
                    <div class="form-group">
                        <label for="company">Company/Organitation <span class="mandatory"></span></label>
                        <input type="text" name="company" id="company" class="p-2 w-full focus:outline-none border border-gray-300" placeholder="Your Company/Organitation">
                    </div>
                    <div class="form-group">
                        <label for="country">Country <span class="mandatory"></span></label>
                        <select name="country" id="country" class="w-full p-2 focus:outline-none border border-gray-300">
                            <option selected disabled>Select Country</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="USA">USA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone <span class="mandatory"></span></label>
                        <input type="text" name="phone" id="phone" class="p-2 w-full focus:outline-none border border-gray-300" placeholder="Your Phone Number">
                    </div>
                    <div class="form-group">
                        <label for="email">Email <span class="mandatory"></span></label>
                        <input type="text" name="email" id="email" class="p-2 w-full focus:outline-none border border-gray-300" placeholder="Your Active Email">
                    </div>
                    <div class="form-group">
                        <label for="reason">Contact Reason <span class="mandatory"></span></label>
                        <select name="reason" id="reason" class="w-full p-2 focus:outline-none border border-gray-300">
                            <option selected disabled>Choose Contact Reason</option>
                            <option value="Indonesia">1</option>
                            <option value="Malaysia">2</option>
                            <option value="USA">3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject <span class="mandatory"></span></label>
                        <input type="text" name="subject" id="subject" class="p-2 w-full focus:outline-none border border-gray-300" placeholder="Your Subject">
                    </div>

                    <div class="form-group">
                        <label for="message">Question or Comments <span class="mandatory"></span></label>
                        <textarea name="message" class="focus:outline-none p-2 w-full border border-gray-300" id="message" cols="6" rows="10" placeholder="Your questions or comments Minimum 20 characters, Maximum 1000 characters"></textarea>
                    </div>

                    <button class="bg-api-red self-end text-white hover:bg-api-redDarken p-1">Submit</button>
                </form>
            </div>

            <div class="faq-wrapper">
                <h4 class="text-xl text-api-red font-bold tracking-widest mb-4">FAQs</h4>
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
