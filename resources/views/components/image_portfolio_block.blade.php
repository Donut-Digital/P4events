<div class="container mx-auto px-4 py-2 md:px-0 xl:max-w-6xl">
    <h2 class="mb-4 text-center">{{ $component['title'] }}</h2>
    <div class="flex flex-row justify-center gap-2">
        @foreach ($component['images'] as $image)
            <img class="w-1/6" src="{{ $image['permalink'] }}">
        @endforeach
    </div>
</div>
