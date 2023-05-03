

<footer class="bg-footer-primary">
    <div class="m-auto flex flex-row p-9 constraint">

        <div class="w-1/3">
            @foreach(Statamic::tag('nav:footer_navigation') as $item)
                <a href="{{ $item['url'] }}" class="inline-block w-1/2 whitespace-nowrap text-white hover:underline">{{ $item['title'] }}</a>
            @endforeach
        </div>

        <div class="w-1/3 font-light leading-5 text-white">
            {{ $company_details['company_description'] }}
        </div>

        <div class="w-1/3">
            <div class="flex justify-end">

                <!-- Telephone -->
                <div class="flex">
                    <div class="my-auto mr-2 flex h-6 w-6 items-center justify-center rounded-full bg-white">
                        <i class="text-xs fa-solid fa-phone text-nav-secondary"></i>
                    </div>

                    <a href="tel:{{ $company_details['telephone'] }}" class="text-sm font-light text-white transition-all hover:text-primary lg:text-base"></a>
                </div>

                <!-- Email -->
                <div class="flex">
                    <div class="my-auto mr-2 flex h-6 w-6 items-center justify-center rounded-full bg-white">
                        <i class="text-xs fa-solid fa-envelope text-nav-secondary"></i>
                    </div>

                    <a href="mailto:{{ $company_details['email'] }}" class="text-sm font-light text-white transition-all hover:text-primary lg:text-base"></a>
                </div>

                <!-- Facebook -->
                <div class="flex">
                    <div class="my-auto mr-2 flex h-6 w-6 items-center justify-center rounded-full bg-white">
                        <i class="text-xs fa-brands fa-facebook-f text-nav-secondary"></i>
                    </div>

                    <a href="tel:{{ $company_details['facebook'] }}" class="text-sm font-light text-white transition-all hover:text-primary lg:text-base"></a>
                </div>

                <!-- Twitter -->
                <div class="flex">
                    <div class="my-auto mr-2 flex h-6 w-6 items-center justify-center rounded-full bg-white">
                        <i class="text-xs fa-brands fa-twitter text-nav-secondary"></i>
                    </div>

                    <a href="tel:{{ $company_details['twitter'] }}" class="text-sm font-light text-white transition-all hover:text-primary lg:text-base"></a>
                </div>

                <!-- Pinterest -->
                <div class="flex">
                    <div class="my-auto mr-2 flex h-6 w-6 items-center justify-center rounded-full bg-white">
                        <i class="text-xs fa-brands fa-pinterest-p text-nav-secondary"></i>
                    </div>

                    <a href="tel:{{ $company_details['pinterest'] }}" class="text-sm font-light text-white transition-all hover:text-primary lg:text-base"></a>
                </div>

                <!-- Instagram -->
                <div class="flex">
                    <div class="my-auto mr-2 flex h-6 w-6 items-center justify-center rounded-full bg-white">
                        <i class="text-xs fa-brands fa-instagram text-nav-secondary"></i>
                    </div>

                    <a href="tel:{{ $company_details['instagram'] }}" class="text-sm font-light text-white transition-all hover:text-primary lg:text-base"></a>
                </div>
            </div>

            <div class="float-right w-52 pt-5 text-right text-white">
                {{ $company_details['address'] }}, {{ $company_details['city'] }}, {{ $company_details['postcode'] }}
            </div>

        </div>
    </div>

</footer>
