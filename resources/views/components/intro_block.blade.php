<section class="relative" style="background-color: {{ $component['background_color'] }};">

    <div class="flex flex-col text-center">
        <div class="bg-cover bg-center absolute h-full opacity-[10%] w-full" style="background-image: url({{ $component['background_image'] }});"></div>
        <div class="py-12 z-10">
            <h1 class="text-white pb-4">{{ $component['title'] }}</h1>
            <p class="w-[41%] m-auto text-white">{{ $component['introduction'] }}</p>
        </div>
    </div>

</section>