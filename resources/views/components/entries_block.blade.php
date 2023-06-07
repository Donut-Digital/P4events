<section class="mx-auto my-10 flex flex-wrap constraint px-2.5">
    @foreach($component['entries'] as $entry)
        <div class="w-full shrink-0 lg:w-1/2">
            <a href="{{ $entry['entry']['permalink'] }}" class="relative mb-5 block mx-2.5 group">
                <img class="w-full transition-all opacity-[55%] group-hover:opacity-100" src="{{ $entry['image']['permalink'] }}" alt="{{ $entry['image']['alt'] }}">
                <h3 class="bottom-0 right-0 text-white z-5 bg-[#333] w-full lg:w-2/3 lg:absolute mb-10 p-6 group-hover:bg-[#6e6e6e73] transition-all">{{ $entry['entry']['title'] }}</h3>
            </a>
        </div>
    @endforeach
</section>