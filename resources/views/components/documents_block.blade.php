<section class="constraint mx-auto px-4 pb-10 md:py-10 flex flex-col md:flex-row">
    <div class="md:w-1/3 flex flex-col gap-y-6 md:pr-8">
        @foreach($component['documents'] as $document)
            <a class="bg-primary text-white text-2xl py-6 text-center font-light" href="{{ $document['document']['permalink'] }}">{{ $document['label'] }}</a>
        @endforeach
    </div>
    <div class="md:w-2/3 bard text-center md:text-left pt-2 md:pt-0">
        {!! $component['description'] !!}
    </div>
</section>