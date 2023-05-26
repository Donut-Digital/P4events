<section class="container m-auto flex flex-col py-5 px-4 lg:flex-row xl:max-w-screen-xl">

    <img src="{{ $component['image']['permalink'] }}" alt="{{ $component['image']['alt'] }}" class="pr-4 w-full lg:w-1/2">
    <div class="bard lg:w-1/2 pl-4">
        <hr class="mb-4 h-1 w-24 border-none" style="background-color: {{ $component['bard_highlight'] }}">
        {!! $component['bard'] !!}
    </div>

</section>