<div class="constraint mx-auto flex flex-col">

    <!-- categories & recent posts - start -->
    @php($categories = \Statamic\Facades\Term::query()->where('taxonomy', 'category')->get())
    @php($recent_entries = \Statamic\Facades\Entry::query()->where('collection', 'articles')->orderBy('date', 'desc')->limit(9)->get())

    <article-filter-block :categories="{{ $categories }}" :latest="{{ $recent_entries }}"></article-filter-block>
    <!-- categories & recent posts - end -->

    @php($filtered_entries = \Statamic\Facades\Entry::query()->where('collection', 'articles')->whereTaxonomy('category::'.$component['category']['slug'])->limit(10)->get())

    <div class="flex flex-wrap justify-between gap-4 p-4">
        @foreach($filtered_entries as $entry)

            <a href="{{ $entry['permalink'] }}" @class(['relative inline-block',
                         'w-full' => $loop->index % 3 == 0,
                         'w-full lg:w-[49%]'=>$loop->index % 3 !== 0])>

                <img class="w-full h-[740px] object-cover" src="{{ $entry['featured_image'] }}">

                <div @class(['md:absolute bottom-0 p-12',
                             'text-right w-full min-h-2/5' => $loop->index % 3 !== 0,
                             'text-left w-full lg:w-[49%]'=>$loop->index % 3 == 0
                             ])
                     style="background-color: #f21623cc;">
                    <h2 class="text-white pb-4">{{ $entry['title'] }}</h2>
                    <p class="text-white pb-4 font-light">{{ $entry['summary'] }}</p>
                    <p class="text-white text-lg">{{ $entry['created_by'] }}</p>
                </div>

            </a>

        @endforeach
    </div>

</div>