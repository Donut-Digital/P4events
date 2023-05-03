<section class="container m-auto flex flex-col py-5 lg:flex-row xl:max-w-screen-xl">

{{--    {{ $component['image_bard_layout'] }}--}}

    <img src="{{ $component['image']['permalink'] }}" alt="{{ $component['image']['alt'] }}" class="mr-5 w-full lg:w-1/2">
    <div class="bard">
        <hr class="my-4 h-1 w-24 border-none" style="background-color: {{ $component['bard_highlight'] }}">
        {!! $component['bard'] !!}
    </div>

</section>