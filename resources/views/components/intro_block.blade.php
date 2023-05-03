<section @class(["relative","border-b border-davy-gray border-opacity-25" =>!$component['light_text'] && $loop->index == 0]) style="background-color: {{ $component['background_color'] }};">

    <div class="flex flex-col text-center">
        <div class="absolute h-full w-full bg-cover bg-center opacity-10" style="background-image: url({{ $component['background_image'] }});"></div>
        <div @class(['z-10 py-12 max-w-3xl m-auto','py-24' => $component['button_label'] && $component['button']])>

            <h1 @class(["text-white"=>$component['light_text'],
                        "text-davy-gray"=>!$component['light_text']])>{{ $component['title'] }}</h1>

            @if($component['introduction'])
                <p @class(["pt-4 font-light",
                           "text-white"=>$component['light_text'],
                           "text-davy-gray"=>!$component['light_text']])>{{ $component['introduction'] }}</p>
            @endif

            @if($component['button_label'] && $component['button'])
                <a class="mt-4 inline-block border px-5 py-4 text-white border-1-white" style="background-color: {{ $component['background_color'] }};" href="{{ $component['button'] }}">{{ $component['button_label'] }}</a>
            @endif
        </div>
    </div>

</section>