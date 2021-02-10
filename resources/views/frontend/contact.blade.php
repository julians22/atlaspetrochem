@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    <section class="mx-auto py-10 w-2/3 container">
        <h2 class="text-3xl font-extrabold text-black text-center mb-4">CONTACT US</h2>

        <div class="grid grid-cols-2 gap-6 bg-white shadow-md p-4">
            <div class="form-wrapper">
                <form action="" class="w-full flex flex-col">
                    <div class="form-group">
                        <label for="name">Full Name <span class="mandatory"></span></label>
                        <input type="text" name="name" id="name" class="p-2 w-full focus:outline-none" placeholder="Your Full Name">
                    </div>
                    <div class="form-group">
                        <label for="company">Company/Organitation <span class="mandatory"></span></label>
                        <input type="text" name="company" id="company" class="p-2 w-full focus:outline-none" placeholder="Your Company/Organitation">
                    </div>
                    <div class="form-group">
                        <label for="country">Country <span class="mandatory"></span></label>
                        <select name="country" id="country" class="w-full p-2 focus:outline-none">
                            <option selected disabled>Select Country</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="USA">USA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone <span class="mandatory"></span></label>
                        <input type="text" name="phone" id="phone" class="p-2 w-full focus:outline-none" placeholder="Your Phone Number">
                    </div>
                    <div class="form-group">
                        <label for="email">Email <span class="mandatory"></span></label>
                        <input type="text" name="email" id="email" class="p-2 w-full focus:outline-none" placeholder="Your Active Email">
                    </div>
                    <div class="form-group">
                        <label for="reason">Contact Reason <span class="mandatory"></span></label>
                        <select name="reason" id="reason" class="w-full p-2 focus:outline-none">
                            <option selected disabled>Choose Contact Reason</option>
                            <option value="Indonesia">1</option>
                            <option value="Malaysia">2</option>
                            <option value="USA">3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject <span class="mandatory"></span></label>
                        <input type="text" name="subject" id="subject" class="p-2 w-full focus:outline-none" placeholder="Your Subject">
                    </div>

                    <div class="form-group">
                        <label for="message">Question or Comments <span class="mandatory"></span></label>
                        <textarea name="message" class="focus:outline-none p-2 w-full" id="message" cols="6" rows="10" placeholder="Your questions or comments Minimum 20 characters, Maximum 1000 characters"></textarea>
                    </div>

                    <button class="bg-api-red self-end text-white hover:bg-api-redDarken p-1">Submit</button>
                </form>
            </div>

            <div class="faq-wrapper">
                <h4 class="text-xl text-api-red font-bold tracking-widest mb-4">FAQs</h4>
                <ul class="flex flex-col">
                    @for ($i = 0; $i < 7; $i++)
                        <li class="mb-4 border-b-2 border-black">
                            <div x-data="{open:false}">
                                <h4 class="text-lg text-black font-semibold tracking-widest cursor-pointer" @click="open = true">Lorem Ipsum</h4>
                                <p class="animate_animated animate__slideInDown mb-2" x-show="open" @click.away="open = false">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, molestias, debitis voluptatem obcaecati a aliquam, delectus placeat libero necessitatibus pariatur laborum dolorum veniam!</p>
                            </div>
                        </li>
                    @endfor
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
