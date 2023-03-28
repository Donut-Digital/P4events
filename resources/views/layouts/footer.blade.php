

<footer class="bg-footer-primary">
    <div class="constraint m-auto flex flex-row p-9">

        <div class="w-1/3">
            @foreach(Statamic::tag('nav:footer_navigation') as $item)
                <a href="{{ $item['url'] }}" class="inline-block w-1/2 whitespace-nowrap text-white hover:underline">{{ $item['title'] }}</a>
            @endforeach
        </div>

        <div class="w-1/3 text-white leading-5 font-light">
            {{ $company_details['company_description'] }}
        </div>

        <div class="w-1/3">
            <div class="flex justify-end">

                <!-- Telephone -->
                <div class="flex">
                    <div class="bg-white h-6 w-6 rounded-full my-auto flex justify-center items-center mr-2">
                        <i class="fa-solid fa-phone text-nav-secondary text-xs"></i>
                    </div>

                    <a href="tel:{{ $company_details['telephone'] }}" class="text-white text-sm lg:text-base font-light hover:text-primary transition-all"></a>
                </div>

                <!-- Email -->
                <div class="flex">
                    <div class="bg-white h-6 w-6 rounded-full my-auto flex justify-center items-center mr-2">
                        <i class="fa-solid fa-envelope text-nav-secondary text-xs"></i>
                    </div>

                    <a href="mailto:{{ $company_details['email'] }}" class="text-white text-sm lg:text-base font-light hover:text-primary transition-all"></a>
                </div>

                <!-- Facebook -->
                <div class="flex">
                    <div class="bg-white h-6 w-6 rounded-full my-auto flex justify-center items-center mr-2">
                        <i class="fa-brands fa-facebook-f text-nav-secondary text-xs"></i>
                    </div>

                    <a href="tel:{{ $company_details['facebook'] }}" class="text-white text-sm lg:text-base font-light hover:text-primary transition-all"></a>
                </div>

                <!-- Twitter -->
                <div class="flex">
                    <div class="bg-white h-6 w-6 rounded-full my-auto flex justify-center items-center mr-2">
                        <i class="fa-brands fa-twitter text-nav-secondary text-xs"></i>
                    </div>

                    <a href="tel:{{ $company_details['twitter'] }}" class="text-white text-sm lg:text-base font-light hover:text-primary transition-all"></a>
                </div>

                <!-- Pinterest -->
                <div class="flex">
                    <div class="bg-white h-6 w-6 rounded-full my-auto flex justify-center items-center mr-2">
                        <i class="fa-brands fa-pinterest-p text-nav-secondary text-xs"></i>
                    </div>

                    <a href="tel:{{ $company_details['pinterest'] }}" class="text-white text-sm lg:text-base font-light hover:text-primary transition-all"></a>
                </div>

                <!-- Instagram -->
                <div class="flex">
                    <div class="bg-white h-6 w-6 rounded-full my-auto flex justify-center items-center mr-2">
                        <i class="fa-brands fa-instagram text-nav-secondary text-xs"></i>
                    </div>

                    <a href="tel:{{ $company_details['instagram'] }}" class="text-white text-sm lg:text-base font-light hover:text-primary transition-all"></a>
                </div>
            </div>

            <div class="w-52 pt-5 text-white text-right float-right">
                {{ $company_details['address'] }}, {{ $company_details['city'] }}, {{ $company_details['postcode'] }}
            </div>

        </div>
    </div>

</footer>
