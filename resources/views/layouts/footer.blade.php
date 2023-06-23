

<footer class="bg-footer-primary">
    <div class="m-auto flex flex-col lg:flex-row p-9 constraint">

        <div class="w-full pb-4 lg:pb-0 lg:w-1/3">
            @foreach(Statamic::tag('nav:footer_navigation') as $item)
                <a href="{{ $item['permalink'] }}" class="inline-block py-2 lg:py-0 text-center lg:text-left w-1/3 lg:w-1/2 whitespace-nowrap text-white hover:underline">{{ $item['title'] }}</a>
            @endforeach
        </div>

        <div class="w-full pb-4 lg:pb-0 lg:w-1/3 text-center lg:text-left font-light leading-5 text-white">
            {{ $company_details['company_description'] }}
        </div>

        <div class="m-auto lg:m-0 lg:w-1/3">
            <div class="flex justify-end">

                <!-- Telephone -->
                <div class="flex">
                    <a href="tel:{{ $company_details['telephone'] }}" aria-label="Company Telephone" class="text-sm font-light text-white transition-all hover:text-primary lg:text-base">
                        <div class="my-auto mr-2 flex h-6 w-6 items-center justify-center rounded-full bg-white">
                            <i class="text-xs fa-solid fa-phone text-nav-secondary"></i>
                        </div>
                    </a>
                </div>

                <!-- Email -->
                <div class="flex">
                    <a href="mailto:{{ $company_details['email'] }}" aria-label="Company Email" class="text-sm font-light text-white transition-all hover:text-primary lg:text-base">
                        <div class="my-auto mr-2 flex h-6 w-6 items-center justify-center rounded-full bg-white">
                            <i class="text-xs fa-solid fa-envelope text-nav-secondary"></i>
                        </div>
                    </a>
                </div>

                <!-- Facebook -->
                <div class="flex">
                    <a href="tel:{{ $company_details['facebook'] }}" aria-label="Company Facebook" class="text-sm font-light text-white transition-all hover:text-primary lg:text-base">
                        <div class="my-auto mr-2 flex h-6 w-6 items-center justify-center rounded-full bg-white">
                            <i class="text-xs fa-brands fa-facebook-f text-nav-secondary"></i>
                        </div>
                    </a>
                </div>

                <!-- Twitter -->
                <div class="flex">
                    <a href="tel:{{ $company_details['twitter'] }}" aria-label="Company Twitter" class="text-sm font-light text-white transition-all hover:text-primary lg:text-base">
                        <div class="my-auto mr-2 flex h-6 w-6 items-center justify-center rounded-full bg-white">
                            <i class="text-xs fa-brands fa-twitter text-nav-secondary"></i>
                        </div>
                    </a>
                </div>

                <!-- Pinterest -->
                <div class="flex">
                    <a href="tel:{{ $company_details['pinterest'] }}" aria-label="Company Pinterest" class="text-sm font-light text-white transition-all hover:text-primary lg:text-base">
                        <div class="my-auto mr-2 flex h-6 w-6 items-center justify-center rounded-full bg-white">
                            <i class="text-xs fa-brands fa-pinterest-p text-nav-secondary"></i>
                        </div>
                    </a>
                </div>

                <!-- Instagram -->
                <div class="flex">
                    <a href="tel:{{ $company_details['instagram'] }}" aria-label="Company Instagram" class="text-sm font-light text-white transition-all hover:text-primary lg:text-base">
                        <div class="my-auto mr-2 flex h-6 w-6 items-center justify-center rounded-full bg-white">
                            <i class="text-xs fa-brands fa-instagram text-nav-secondary"></i>
                        </div>
                    </a>
                </div>
            </div>

            <div class="float-right w-52 pt-5 text-center lg:text-right text-white">
                {{ $company_details['address'] }}, {{ $company_details['city'] }}, {{ $company_details['postcode'] }}
            </div>

        </div>
    </div>

</footer>
