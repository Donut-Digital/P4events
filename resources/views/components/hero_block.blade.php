<section class="constraint mx-auto">

    <div class="relative hero-block m-4">
        <img src="{{ $component['hero_image'] }}">
        <div @class(["text-right lg:w-4/5 md:absolute bottom-0 right-0 p-8 lg:mb-20",
                 "bard-light"=>$component['light_text'],
                 "bard-dark"=>!$component['light_text']])
             style="background-color: {{ $component['bard_color'] }};">
            {!! $component['bard'] !!}
        </div>
    </div>
</section>