<footer class="w-full pt-4 md:pt-6 text-white bg-gradient-to-b from-api-red to-api-redDarken">
    <div class="container mx-auto w-3/4 ">
        <div class="flex flex-col md:flex-row w-full">
            <div class="box-1 flex flex-col justify-between w-full md:w-2/5 pr-0 md:pr-10">
                <h4 class="company-name text-base font-semibold md:mb-4">PT ATLAS PETROCHEM INDO</h4>
                <div class="address mb-4 text-sm font-medium">
                    <h4 class="font-italic">Head Office:</h4>
                    <p>Jl. Danau Indah Raya No.5 RT.12/RW.13, Sunter Jaya, Tj. Priok, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14360</p>
                </div>
                <p class="phone text-sm font-medium mb-4">Phone. <a href="tel:+6221-220-650-68" class="no-underline">+6221 220 650 68</a></p>
                <p class="website text-sm font-medium"><a href="#" class="no-underline">www.atlaspetrochem.co.id</a></p>
            </div>

            <div class="box-2 flex flex-col justify-between w-full  md:w-1/5 text-sm font-medium mt-4 md:mt-0">
                <a href="{{ route('frontend.company') }}" class="block">COMPANY</a>
                <a href="{{ route('frontend.product') }}" class="block">PRODUCTS</a>
                <a href="{{ route('frontend.article.news.index') }}" class="block">NEWS ARTICLES</a>
                <a href="{{ route('frontend.career') }}" class="block">CAREERS</a>
                <a href="{{ route('frontend.contact') }}" class="block">CONTACT US</a>
            </div>

            <div class="box-3 flex flex-col justify-between w-full md:w-2/5 md:pr-10 md:mt-0 mt-4">
                <h4 class="text-lg">NEED ASSISTANCE?</h4>
                <a href="" class="border-2 border-white py-1 px-2 inline-flex items-center font-semibold text-xl">
                    <span class="w-8 mr-4">
                        <img src="{{ asset('img/frontend/icons/phone_icons.png') }}" alt="" class="w-full">
                    </span>
                    <span>0812 XXX XXX XX</span>
                </a>
                <a href="" class="border-2 border-white py-1 px-2 inline-flex items-center font-semibold text-xl">
                    <span class="w-8 mr-4">
                        <img src="{{ asset('img/frontend/icons/email_icons.png') }}" alt="" class="w-full">
                    </span>
                    <span>HELPDESK EMAIL</span>
                </a>
                <ul class="flex items-center mt-2 md:mt-0">
                    <li class="mr-2">
                        <span class="block">Online store:</span>
                    </li>
                    <li class="mr-2">
                        <a href="#"><span class="w-12 block"><img src="{{ asset('img/blibli.jpg') }}" alt="" class="w-full"></span></a>
                    </li>
                    <li>
                        <a href="#"><span class="w-12 block"><img src="{{ asset('img/lazada.jpg') }}" alt="" class="w-full"></span></a>
                    </li>
                </ul>
            </div>
        </div>

        <p class="text-center text-xs pb-2 pt-6">Copyrights &copy; 2021 PT Atlas Petrochem Indo. All rights reserved</p>
    </div>
</footer>
