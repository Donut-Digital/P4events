<section class="relative mb-10" style="background-color: {{ $component['background_color'] }};">

    <div class="flex flex-col text-center">
        <div class="bg-cover bg-center absolute h-full opacity-10 w-full" style="background-image: url({{ $component['background_image'] }});"></div>
        <div @class(['z-10 py-12 max-w-3xl m-auto','py-24' => $component['button_label'] && $component['button']])>

            <h1 class="text-white">{{ $component['title'] }}</h1>

            @if($component['introduction'])
                <p class="pt-4 text-white font-light">{{ $component['introduction'] }}</p>
            @endif

            @if($component['button_label'] && $component['button'])
                <a class="inline-block px-5 py-4 mt-4 text-white border border-1-white" style="background-color: {{ $component['background_color'] }};" href="{{ $component['button'] }}">{{ $component['button_label'] }}</a>
            @endif
        </div>
    </div>

</section>