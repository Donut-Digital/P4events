<section class="constraint mx-auto flex flex-wrap my-10 px-2.5">
    @foreach($component['entries'] as $entry)
        <div class="w-full lg:w-1/2 shrink-0">
            <a href="{{ $entry['entry']['permalink'] }}" class="block relative mx-2.5 mb-5 group">
                <img class="w-full opacity-[55%] group-hover:opacity-100 transition-all" src="{{ $entry['image']['permalink'] }}">
                <h3 class="bottom-0 right-0 text-white z-5 bg-[#333] w-full lg:w-2/3 lg:absolute mb-10 p-6 group-hover:bg-[#6e6e6e73] transition-all">{{ $entry['entry']['title'] }}</h3>
            </a>
        </div>
    @endforeach
</section>