<div class="container mx-auto flex flex-wrap flex-row px-4 pt-2 pb-4 gap-5 xl:max-w-screen-xl">

    @if(count($component['images']) == 6)
    <div class="flex lg:flex-1 w-full flex-col gap-5 lg:w-1/3">
        <img class="w-full h-full min-w-0" src="{{ $component['images'][0]['permalink'] }}" alt="{{ $component['images'][0]['alt'] }}" loading="lazy">
        <img class="w-full h-full min-w-0" src="{{ $component['images'][1]['permalink'] }}" alt="{{ $component['images'][1]['alt'] }}" loading="lazy">
        <img class="w-full h-full min-w-0" src="{{ $component['images'][2]['permalink'] }}" alt="{{ $component['images'][2]['alt'] }}" loading="lazy">
    </div>

    <div class="flex lg:flex-1 w-full flex-col gap-5 lg:w-1/3">
        <img class="w-full min-w-0" src="{{ $component['images'][3]['permalink'] }}" alt="{{ $component['images'][3]['alt'] }}" loading="lazy">
        <img class="w-full min-w-0" src="{{ $component['images'][4]['permalink'] }}" alt="{{ $component['images'][4]['alt'] }}" loading="lazy">
    </div>

    <div class="flex lg:flex-1 w-full flex-col gap-5 lg:w-1/3">
        <img class="w-full min-w-0" src="{{ $component['images'][5]['permalink'] }}" alt="{{ $component['images'][5]['alt'] }}" loading="lazy">
        <div class="h-2/3 w-full">
            <hr class="mb-4 h-1 w-16 border-none" style="background-color: {{ $component['bard_highlight'] }}">
            {!! $component['bard'] !!}
        </div>
    </div>

    @elseif(count($component['images']) == 5)

        <div class="flex flex-1 basis-1/4 gap-5 w-full flex-col lg:w-1/3">
            <img class="w-full h-full min-w-0" src="{{ $component['images'][0]['permalink'] }}" alt="{{ $component['images'][0]['alt'] }}" loading="lazy">
            <img class="w-full h-full min-w-0" src="{{ $component['images'][1]['permalink'] }}" alt="{{ $component['images'][1]['alt'] }}" loading="lazy">
        </div>

        <div class="flex flex-1 basis-1/4 w-full flex-col lg:w-1/3">
            <img class="w-full h-full min-w-0" src="{{ $component['images'][3]['permalink'] }}" alt="{{ $component['images'][3]['alt'] }}" loading="lazy">
        </div>

        <div class="flex flex-1 basis-1/4 gap-5 w-full flex-col lg:w-1/3">
            <img class="w-full min-w-0" src="{{ $component['images'][4]['permalink'] }}" alt="{{ $component['images'][4]['alt'] }}" loading="lazy">

            <div class="flex flex-1 w-full flex-col">
                <hr class="mb-4 h-1 w-16 border-none" style="background-color: {{ $component['bard_highlight'] }}">
                {!! $component['bard'] !!}
            </div>
        </div>

        <div class="flex flex-1 basis-[66%] w-full flex-col lg:w-2/3">
            <img class="w-full min-w-0" src="{{ $component['images'][2]['permalink'] }}" alt="{{ $component['images'][2]['alt'] }}" loading="lazy">
        </div>

        <div class="flex flex-1 basis-[32%] w-full flex-col lg:w-1/3"></div>


    @endif
</div>
