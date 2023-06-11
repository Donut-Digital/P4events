<section class="container m-auto flex flex-col gap-4 p-4 lg:flex-row xl:max-w-screen-xl">

    <iframe src="{{ $component['video'] }}" class="w-full lg:w-1/2 min-h-[280px]"></iframe>

    <div class="bard lg:w-1/2 flex flex-grow flex-col">
        <hr class="mb-4 h-1 w-24 border-none" style="background-color: {{ $component['bard_highlight'] }}">
        {!! $component['bard'] !!}

        @if($component['call_to_action_entry'] && $component['call_to_action_label'])
            <a href="{{ $component['call_to_action_entry']['permalink'] }}" class="px-10 py-3 text-center text-white bg-primary w-max"> {{ $component['call_to_action_label'] }} </a>
        @endif
    </div>


</section>