<section class="constraint mx-auto py-10 px-4">
    <div class="flex flex-col lg:flex-row gap-4">
        {{-- Image --}}
        <div class="flex w-full lg:w-1/3 flex-col">
            <img class="hidden lg:block basis-full flex-1" src="{{ $component['image'] }}" alt="{{ $component['alt'] }}" loading="lazy">
            <div class="p-5 bg-primary event-form-bard flex-1">
                {!! $component['bard'] !!}
            </div>
        </div>

        {{-- Form details --}}
        <div class="flex w-full lg:w-2/3 flex-col gap-8">
            <event-form csrf="{{ csrf_token() }}" origin="{{ $component['type'] }}">
            </event-form>
        </div>
    </div>
</section>
