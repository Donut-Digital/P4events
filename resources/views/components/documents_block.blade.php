<section class="mx-auto flex flex-col px-4 pb-10 constraint md:flex-row md:py-10">
    <div class="flex flex-col gap-y-6 md:w-1/3 md:pr-8">
        @foreach($component['documents'] as $document)
            <a class="py-6 text-center text-2xl font-light text-white bg-primary" href="{{ $document['document']['permalink'] }}">{{ $document['label'] }}</a>
        @endforeach
    </div>
    <div class="pt-2 text-center bard md:w-2/3 md:pt-0 md:text-left">
        {!! $component['description'] !!}
    </div>
</section>