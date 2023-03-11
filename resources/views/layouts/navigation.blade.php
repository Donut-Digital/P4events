<!-- banner navigation start -->
<nav class="bg-nav-secondary flex justify-end py-3">

    <div class="flex mr-4">
        <div class="bg-white h-6 w-6 rounded-full my-auto flex justify-center items-center mr-2">
            <i class="fa-solid fa-envelope text-nav-secondary text-xs"></i>
        </div>

        <a href="mailto:{{ $company_details['email'] }}" class="mr-2 text-white text-sm lg:text-base font-light hover:text-primary transition-all">{{ $company_details['email'] }}</a>
    </div>

    <div class="flex mr-4">
        <div class="bg-white h-6 w-6 rounded-full my-auto flex justify-center items-center mr-2">
            <i class="fa-solid fa-phone text-nav-secondary text-xs"></i>
        </div>

        <a href="tel:{{ $company_details['telephone'] }}" class="mr-2 text-white text-sm lg:text-base font-light hover:text-primary transition-all">{{ $company_details['telephone'] }}</a>
    </div>
</nav>
<!-- banner navigation end -->

<!-- primary navigation start -->
<nav class="px-5 py-4 bg-nav-primary">

    <div class="constraint mx-auto">

        <div class="relative">
            <!-- Mobile Menu Trigger button start -->
            <button id="menu-btn" type="button" class="absolute h-full my-auto text-white hover:text-primary lg:hidden">
                <div class="relative w-10 h-10">
                    <div id="menu-btn-1" class="absolute transition-all ease-in-out duration-300">
                        @includeIf('SVGs.menu')
                    </div>

                    <div id="menu-btn-2" class="rotate-90 absolute transition-all ease-in-out duration-300 opacity-0">
                        @includeIf('SVGs.menu')
                    </div>
                </div>
            </button>
            <!-- Mobile Menu Trigger button end -->

            @if($navigation_settings['company_logo'])
                <div class="mx-auto lg:mx-0 w-fit">
                    <a href="/">
                        <img class="w-[230px] h-[48px] py-2 m-auto lg:m-0" src="{{ $navigation_settings['company_logo']['permalink'] }}">
                    </a>
                </div>
            @endif

        </div>

        <!-- desktop navigation start -->
        <div id="desktop-menu" class="pt-[20px] pl-5 hidden lg:block">
            <ul class="flex flex-row text-sm font-medium">
                @foreach(Statamic::tag('nav:main_navigation') as $item)
                    @if(count($item['children']) > 0)
                        <li class="flex relative items-center mr-4 py-2 group border-b-2 border-b-nav-primary hover:border-b-primary transition-all">
                            <a href="{{ $item['url'] }}" class="text-white text-lg font-light">
                                <span class="whitespace-nowrap">{{ $item['title'] }}</span>
                            </a>

                            <!-- Dropdown menu start -->
                            <div class="absolute min-w-[100%] w-max top-[50px] hidden group-hover:block z-10 bg-nav-secondary shadow border-t-2 border-primary">
                                <ul class="py-1 text-white text-sm divide-y divide-[#555]" aria-labelledby="dropdownLargeButton">
                                    @foreach($item['children'] as $child)
                                        <li class="dropdown-item">
                                            <a href="{{ $child['url'] }}" class="block py-2 px-4 hover:bg-[#444]">{{ $child['title'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- Dropdown menu end -->

                        </li>
                    @elseif(!$item['last'])
                        <li class="flex items-center mr-4 py-2 border-b-2 border-b-nav-primary hover:border-b-primary transition-all">
                            <a href="{{ $item['url'] }}" class="text-white text-lg font-light">
                                <span class="whitespace-nowrap">{{ $item['title'] }}</span>
                            </a>
                        </li>
                    @else
                        <li class="flex items-center py-4 px-7 bg-primary hover:bg-[#6e6e6d] text-white fill-white transition-all ml-auto">
                            <a href="{{ $item['url'] }}" class="text-[15px] font-light pr-1 tracking-[1px]">
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
<div id="mobile-menu" class="hidden w-full bg-white left-0 shadow-md">
    <ul class="flex flex-col p-2 mt-0 text-sm font-medium">

        @foreach(Statamic::tag('nav:main_navigation') as $item)
            @if(count($item['children']) > 0)

            @elseif(!$item['last'])
                <li class="flex items-center w-full py-2">
                    <a href="{{ $item['url'] }}" class="w-full block py-2 pr-4 pl-3 rounded lg:p-0 inline-flex justify-between">
                        <span class="whitespace-nowrap m-auto">{{ $item['title'] }}</span>
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
<li class="flex items-center justify-center py-2 lg:py-4 px-7 bg-primary lg:hidden">
    <a href="{{ $last_item_url }}" class="text-[15px] font-light pr-1 tracking-[1px] w-full flex items-center justify-center text-white fill-white">
        <span class="whitespace-nowrap pr-2">{{ $last_item_title }}</span>
        <span class="pr-1">@include('SVGs.right-angle')</span>
        <span>@include('SVGs.right-angle')</span>
    </a>
</li>
<!-- mobile menu CTA end -->






