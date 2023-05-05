<section class="constraint mx-auto py-10 px-4">
    <div class="flex flex-col items-center justify-center gap-4 text-center lg:flex-row lg:items-start lg:text-left">
        {{-- Image --}}
        <div class="w-full lg:w-1/3">
            <div class="flex h-full flex-col">
                <img class="hidden lg:block" src="{{ $component['main_image'] }}">
                <div class="p-5 bg-primary">
                    <p class="font-bold text-white">{{ $component['image_title'] }}</p>
                    <p class="text-white">{{ $component['image_sub_description'] }}</p>
                </div>
            </div>
        </div>

        {{-- Form details --}}
        <div id="join_us" class="flex w-full lg:w-2/3 flex-col gap-8 lg:sticky top-0">
            <join-us-form csrf="{{ csrf_token() }}" origin="{{ $component['type'] }}"
                      tcs="{{ $component['terms_conditions']['permalink'] }}">
            </join-us-form>
        </div>
    </div>
</section>
