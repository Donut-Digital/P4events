<section class="relative" style="background-color: {{ $component['background_color'] }};">

    <div class="flex flex-col text-center">
        <div class="absolute h-full w-full bg-cover bg-center opacity-10" style="background-image: url({{ $component['background_image'] }});"></div>
        <div class="z-10 m-auto max-w-3xl py-24">

            <h2 class="text-white">{{ $component['title'] }}</h2>

            @if($component['introduction'])
                <p class="m-auto pt-4 font-light text-white">{{ $component['introduction'] }}</p>
            @endif

            <div class="mt-16">
                @foreach($component['actions'] as $action)
                    <a class="mb-14 inline-block w-1/3" href="{{ $action['link'] }}" aria-label="A brand we have worked with">
                        <img class="m-auto" src="{{ $action['image']['permalink'] }}" alt="{{ $action['image']['alt'] }}" loading="lazy">
                    </a>
                @endforeach
            </div>

        </div>
    </div>

</section>