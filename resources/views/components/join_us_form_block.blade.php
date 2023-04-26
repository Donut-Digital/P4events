<section class="container mx-auto py-10">
    <div class="flex flex-col xl:flex-row text-center xl:text-left items-center xl:items-start justify-center gap-4">
        {{-- Image --}}
        <div class="w-2/3 xl:w-1/3">
            <div class="flex flex-col h-full">
                <img src="{{ $component['main_image'] }}">
                <div class="p-5" style="background-color: var(--theme-primary-colour)">
                    <p class="font-bold" style="color: #FFF;">{{ $component['image_title'] }}</p>
                    <p style="color: #FFF;">{{ $component['image_sub_description'] }}</p>
                </div>
            </div>
        </div>

        {{-- Form details --}}
        <div id="join_us" class="w-2/3 px-0 xl:px-4 flex flex-col gap-8 ">
            <join-us-form csrf="{{ csrf_token() }}" origin="{{ $component['type'] }}"
                filetermsandconditions="{{ $component['terms_conditions_file'] }}">
            </join-us-form>
        </div>
    </div>
</section>
