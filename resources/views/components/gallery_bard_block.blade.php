<div class="mx-auto container xl:max-w-screen-xl px-4 pt-2 pb-4 flex flex-row gap-5">

    <div class="w-full lg:w-1/3 flex flex-col gap-5">
        <img class="w-full min-w-0" src="{{ $component['images'][0]['permalink'] }}" alt="{{ $component['images'][0]['alt'] }}">
        <img class="w-full min-w-0" src="{{ $component['images'][1]['permalink'] }}" alt="{{ $component['images'][1]['alt'] }}">
        <img class="w-full min-w-0" src="{{ $component['images'][2]['permalink'] }}" alt="{{ $component['images'][2]['alt'] }}">
    </div>

    <div class="w-full lg:w-1/3 flex flex-col gap-5">
        <img class="w-full min-w-0" src="{{ $component['images'][3]['permalink'] }}" alt="{{ $component['images'][3]['alt'] }}">
        <img class="w-full min-w-0" src="{{ $component['images'][4]['permalink'] }}" alt="{{ $component['images'][4]['alt'] }}">
    </div>

    <div class="w-full lg:w-1/3 flex flex-col gap-5">
        <img class="w-full min-w-0" src="{{ $component['images'][5]['permalink'] }}" alt="{{ $component['images'][5]['alt'] }}">
        <div class="w-full h-2/3">
            <hr class="mb-4 h-1 w-16 border-none" style="background-color: {{ $component['bard_highlight'] }}">
            {!! $component['bard'] !!}
        </div>
    </div>

</div>
