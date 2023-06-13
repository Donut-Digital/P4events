<section class="mx-auto px-4 py-10 constraint flex flex-col lg:flex-row gap-4">

    <div class="flex w-full lg:w-1/3 flex-col">
        <img class="hidden lg:block basis-full flex-1" src="{{ $component['main_image'] }}" alt="{{ $component['main_image']['alt'] }}" loading="lazy">
        <div class="p-5 bg-primary flex-1">
            <p class="font-bold text-white">{{ $component['image_title'] }}</p>
            <p class="text-white">{{ $component['image_sub_description'] }}</p>
        </div>
    </div>

    {{-- Form details --}}
    <div id="join_us" class="flex w-full lg:w-2/3 flex-col gap-8">
        <join-us-form csrf="{{ csrf_token() }}" origin="{{ $component['type'] }}"
                  tcs="{{ $component['terms_conditions']['permalink'] }}">
        </join-us-form>
    </div>

</section>
