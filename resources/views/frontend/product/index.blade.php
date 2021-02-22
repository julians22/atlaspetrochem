@extends('frontend.layouts.app')

@section('title', app_name() . ' | Product')

@section('content')
    <section class="py-6" data-aos="fade-up" data-aos-duration="2000">
        <h4 class="text-2xl font-bold text-center tracking-widest">THE LEADING LUBRICANT</h4>
        <h5 class="text-xl font-semibold text-gray-800 text-center tracking-widest">FROM JAPAN</h5>
        <div class="w-full mx-auto relative mt-4">
            <img src="{{ asset('img/frontend/oil_bottle.png') }}" class="w-3/4 mx-auto" alt="lubricant.png">

            <div class="flex flex-row w-full absolute top-0 inset-x-0 bottom-0 overflow-hidden">
                <div class="w-1/2 h-full group">
                    <div class="pr-24 bg-black bg-opacity-50 w-full h-full -left-full group-hover:left-0 animate__animated animate__slideInLeft relative transition-all duration-1000 ease-in-out">
                        <div class="bg-api-redLighten bg-opacity-50 pt-20 pb-4 w-3/5 ml-auto px-4 mb-4 relative">
                            <h4 class="text-xl font-bold tracking-widest text-white">DIVISI AUTOMOTIVE</h4>
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ducimus temporibus doloremque voluptate officia, ratione quia ipsum blanditiis molestias architecto?</p>
                            <a href="#" class="rounded-md bg-api-red font-semibold px-4 py-1 text-white text-sm absolute -bottom-10">View Galery >></a>
                        </div>
                    </div>
                </div>
                <div class="w-1/2 h-full group">
                    <div class="pl-24 bg-black bg-opacity-50 w-full h-full -right-full group-hover:right-0 animate__animated animate__slideInRight relative transition-all duration-1000 ease-in-out">
                        <div class="bg-api-redLighten bg-opacity-50 pt-20 pb-4 w-3/5 mr-auto px-4 mb-4 relative">
                            <h4 class="text-xl font-bold tracking-widest text-white">DIVISI INDUSTRIAL</h4>
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ducimus temporibus doloremque voluptate officia, ratione quia ipsum blanditiis molestias architecto?</p>
                            <a href="#" class="rounded-md bg-api-red font-semibold px-4 py-1 text-white text-sm absolute -bottom-10">View Galery >></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
