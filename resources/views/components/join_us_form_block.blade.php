<section class="container mx-auto py-10">
    <div class="flex flex-col items-center justify-center gap-4 text-center xl:flex-row xl:items-start xl:text-left">
        {{-- Image --}}
        <div class="w-2/3 xl:w-1/3">
            <div class="flex h-full flex-col">
                <img src="{{ $component['main_image'] }}">
                <div class="p-5" style="background-color: var(--theme-primary-colour)">
                    <p class="font-bold" style="color: #FFF;">{{ $component['image_title'] }}</p>
                    <p style="color: #FFF;">{{ $component['image_sub_description'] }}</p>
                </div>
            </div>
        </div>

        {{-- Form details --}}
        <div id="join_us" class="flex w-2/3 flex-col gap-8 px-0 xl:px-4">
            <join-us-form csrf="{{ csrf_token() }}" origin="{{ $component['type'] }}"
                filetermsandconditions="{{ $component['terms_conditions_file'] }}">
            </join-us-form>
        </div>
    </div>
</section>
