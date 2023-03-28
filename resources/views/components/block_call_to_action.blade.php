<section class="relative" style="background-color: {{ $component['background_color'] }};">

    <div class="flex flex-col text-center">
        <div class="bg-cover bg-center absolute h-full opacity-10 w-full" style="background-image: url({{ $component['background_image'] }});"></div>
        <div class="z-10 py-24 max-w-3xl m-auto">

            <h1 class="text-white">{{ $component['title'] }}</h1>

            @if($component['introduction'])
                <p class="m-auto pt-4 text-white font-light">{{ $component['introduction'] }}</p>
            @endif

            <div class="mt-16">
                @foreach($component['actions'] as $action)
                    <a class="inline-block w-1/3 mb-14" href="{{ $action['link'] }}">
                        <img class="m-auto" src="{{ $action['image']['permalink'] }}" alt="{{ $action['image']['alt'] }}">
                    </a>
                @endforeach
            </div>

        </div>
    </div>

</section>