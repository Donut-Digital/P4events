<section class="flex flex-row max-w-screen-xl m-auto py-5">

{{--    {{ $component['image_bard_layout'] }}--}}

    <img src="{{ $component['image']['permalink'] }}" alt="{{ $component['image']['alt'] }}" class="mr-5 w-1/2">
    <div class="bard">
        <hr class="h-1 w-24 my-4 border-none" style="background-color: {{ $component['bard_highlight'] }}">
        {!! $component['bard'] !!}
    </div>

</section>