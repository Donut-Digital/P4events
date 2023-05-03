<!-- banner navigation start -->
<nav class="flex justify-end py-3 bg-nav-secondary">

    <div class="mr-4 flex">
        <div class="my-auto mr-2 flex h-6 w-6 items-center justify-center rounded-full bg-white">
            <i class="text-xs fa-solid fa-envelope text-nav-secondary"></i>
        </div>

        <a href="mailto:{{ $company_details['email'] }}"
            class="mr-2 text-sm font-light text-white transition-all hover:text-primary lg:text-base">{{ $company_details['email'] }}</a>
    </div>

    <div class="mr-4 flex">
        <div class="my-auto mr-2 flex h-6 w-6 items-center justify-center rounded-full bg-white">
            <i class="text-xs fa-solid fa-phone text-nav-secondary"></i>
        </div>

        <a href="tel:{{ $company_details['telephone'] }}"
            class="mr-2 text-sm font-light text-white transition-all hover:text-primary lg:text-base">{{ $company_details['telephone'] }}</a>
    </div>
</nav>
<!-- banner navigation end -->

<!-- primary navigation start -->
<nav class="px-5 py-4 bg-nav-primary">

    <div class="mx-auto constraint">

        <div class="relative">
            <!-- Mobile Menu Trigger button start -->
            <button id="menu-btn" type="button"
                class="absolute my-auto h-full text-white hover:text-primary lg:hidden">
                <div class="relative h-10 w-10">
                    <div id="menu-btn-1" class="absolute transition-all duration-300 ease-in-out">
                        @includeIf('SVGs.menu')
                    </div>

                    <div id="menu-btn-2" class="absolute rotate-90 opacity-0 transition-all duration-300 ease-in-out">
                        @includeIf('SVGs.menu')
                    </div>
                </div>
            </button>
            <!-- Mobile Menu Trigger button end -->

            @if ($navigation_settings['company_logo'])
                <div class="mx-auto w-fit lg:mx-0">
                    <a href="/">
                        <img class="m-auto py-2 w-[230px] h-[48px] lg:m-0"
                            src="{{ $navigation_settings['company_logo']['permalink'] }}">
                    </a>
                </div>
            @endif

        </div>

        <!-- desktop navigation start -->
        <div id="desktop-menu" class="hidden pl-5 pt-[20px] lg:block">
            <ul class="flex flex-row text-sm font-medium">
                @foreach (Statamic::tag('nav:main_navigation') as $item)
                    @if (count($item['children']) > 0)
                        <li
                            class="relative mr-4 flex items-center border-b-2 py-2 transition-all group border-b-nav-primary hover:border-b-primary">
                            <a href="{{ $item['url'] }}" class="text-lg font-light text-white">
                                <span class="whitespace-nowrap">{{ $item['title'] }}</span>
                            </a>

                            <!-- Dropdown menu start -->
                            <div
                                class="absolute z-20 hidden w-max border-t-2 shadow min-w-[100%] top-[50px] bg-nav-secondary border-primary group-hover:block">
                                <ul class="py-1 text-white text-sm divide-y divide-[#555]"
                                    aria-labelledby="dropdownLargeButton">
                                    @foreach ($item['children'] as $child)
                                        <li class="dropdown-item">
                                            <a href="{{ $child['url'] }}"
                                                class="block py-2 px-4 hover:bg-[#444]">{{ $child['title'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- Dropdown menu end -->

                        </li>
                    @elseif(!$item['last'])
                        <li
                            class="mr-4 flex items-center border-b-2 py-2 transition-all border-b-nav-primary hover:border-b-primary">
                            <a href="{{ $item['url'] }}" class="text-lg font-light text-white">
                                <span class="whitespace-nowrap">{{ $item['title'] }}</span>
                            </a>
                        </li>
                    @else
                        <li
                            class="ml-auto flex cursor-pointer items-center fill-white px-7 py-4 text-white transition-all bg-primary hover:bg-dim-gray">
                            <a href="{{ $item['url'] }}" class="pr-1 font-light text-[15px] tracking-[1px]">
                                <span class="whitespace-nowrap">{{ $item['title'] }}</span>
                            </a>
                            <span class="pr-1">@include('SVGs.right-angle')</span>
                            <span>@include('SVGs.right-angle')</span>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
        <!-- desktop navigation end -->
    </div>

</nav>

<!-- mobile navigation start -->
<div id="mobile-menu" class="left-0 hidden w-full border-t-2 shadow-md bg-nav-secondary border-primary">
    <ul class="flex flex-col text-sm font-medium text-white text-sm divide-y divide-[#555]">

        @foreach (Statamic::tag('nav:main_navigation') as $item)
            @if (count($item['children']) > 0)
                <li class="flex w-full flex-col items-center py-2">

                    <button class="m-auto flex items-center justify-center py-2 pr-4 pl-3 mobile-dropdown-trigger">
                        <a href="{{ $item['url'] }}"
                            class="block inline-flex w-full justify-between rounded py-2 pr-4 pl-3 lg:p-0">
                            <span class="m-auto whitespace-nowrap">{{ $item['title'] }}</span>
                        </a>
                        @includeIf('SVGs.dropdown')
                    </button>
                    <!-- Dropdown menu -->
                    <div class="hidden">
                        <ul class="py-1 text-center text-sm" aria-labelledby="dropdownLargeButton">
                            @foreach ($item['children'] as $child)
                                <li class="dropdown-item">
                                    <a href="{{ $child['url'] }}" class="block px-4 py-2">{{ $child['title'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </li>
            @elseif(!$item['last'])
                <li class="flex w-full items-center py-2">
                    <a href="{{ $item['url'] }}"
                        class="block inline-flex w-full justify-between rounded py-2 pr-4 pl-3 lg:p-0">
                        <span class="m-auto whitespace-nowrap">{{ $item['title'] }}</span>
                    </a>
                </li>
            @else
                @php($last_item_url = $item['url'])
                @php($last_item_title = $item['title'])
            @endif
        @endforeach
    </ul>
</div>
<!-- mobile navigation end -->

<!-- mobile menu CTA start -->
<li class="flex items-center justify-center px-7 py-2 bg-primary lg:hidden lg:py-4">
    <a href="{{ $last_item_url }}"
        class="flex w-full items-center justify-center fill-white pr-1 font-light text-white text-[15px] tracking-[1px]">
        <span class="whitespace-nowrap pr-2">{{ $last_item_title }}</span>
        <span class="pr-1">@include('SVGs.right-angle')</span>
        <span>@include('SVGs.right-angle')</span>
    </a>
</li>
<!-- mobile menu CTA end -->
