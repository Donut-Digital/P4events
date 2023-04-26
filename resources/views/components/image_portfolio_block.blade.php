<div class="container xl:max-w-6xl mx-auto py-2 px-4 md:px-0">
    <h2 class="text-center mb-4">{{ $component['title'] }}</h2>
    <div class="flex flex-row gap-2 justify-center">
        @foreach ($component['images'] as $image)
            <img class="w-1/6" src="{{ $image['permalink'] }}">
        @endforeach
    </div>
</div>
