<section class="constraint mx-auto py-10 px-4">
    <div class="flex flex-col items-center justify-center gap-4 text-center lg:flex-row lg:items-start lg:text-left">
        {{-- Image --}}
        <div class="w-full lg:w-1/3">
            <div class="flex h-full flex-col">
                <img class="hidden lg:block" src="{{ $component['image'] }}" alt="{{ $component['alt'] }}">
                <div class="p-5 bg-primary event-form-bard">
                    {!! $component['bard'] !!}
                </div>
            </div>
        </div>

        {{-- Form details --}}
        <div class="flex w-full lg:w-2/3 flex-col gap-8 lg:sticky top-0">
            <event-form csrf="{{ csrf_token() }}" origin="{{ $component['type'] }}">
            </event-form>
        </div>
    </div>
</section>
