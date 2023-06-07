@extends('layouts.base')

@section('content')

    @includeIf('layouts.navigation')

    <div class="flex-grow content">
        <h1 class="py-10 text-center text-white bg-midnight-black">Category: {{ $title }}</h1>

        <div class="constraint mx-auto flex flex-col">

            <!-- categories & recent posts - start -->
            @php($categories = \Statamic\Facades\Term::query()->where('taxonomy', 'category')->get())
            @php($recent_entries = \Statamic\Facades\Entry::query()->where('collection', 'articles')->orderBy('date', 'desc')->limit(9)->get())

            <article-filter-block :categories="{{ $categories }}" :latest="{{ $recent_entries }}"></article-filter-block>
            <!-- categories & recent posts - end -->

            @php($filtered_entries = \Statamic\Facades\Entry::query()->where('collection', 'articles')->whereTaxonomy('category::'.$page['slug'])->limit(10)->get())

            <div class="flex flex-wrap justify-between gap-4 p-4">
                @foreach($filtered_entries as $entry)

                    <a href="{{ $entry['permalink'] }}" @class(['relative inline-block',
                         'w-full' => $loop->index % 3 == 0,
                         'w-full lg:w-[49%]'=>$loop->index % 3 !== 0])>

                        <img class="w-full h-[740px] object-cover" src="{{ $entry['featured_image'] }}" alt="{{ $entry['alt'] }}">

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

        <section class="border-t border-gray-300 mt-4 bg-[#fcfcfc]">
            <div class="py-10">

                <h3 class="py-10 text-center text-primary">Turn your ideas into action, arrange a free consultation</h3>

                <div id="contact_form_success" class="mb-4 hidden rounded-lg bg-green-50 p-4 text-center text-sm text-green-700" role="alert">
                    <span class="font-semibold">Success!</span> Thank you for your submission, we will be in touch as soon as possible.
                </div>

                <form id="contact_form" method="post" action="/!/forms/contact_form" class="flex flex-col flex-wrap justify-center space-y-4 xl:space-x-4 xl:flex-row">
                    @csrf

                    <div class="field">
                        <label for="name">Name: </label>
                        <input type="text" name="name" id="name" required>
                    </div>

                    <div class="field">
                        <label for="number">Number: </label>
                        <input type="text" name="number" id="number" required>
                    </div>

                    <div class="field">
                        <label for="email">Email: </label>
                        <input type="email" name="email" id="email" required>
                    </div>

                    <input type="text" name="honeypot" class="hidden honeypot" />

                    <button type="submit" class="px-10 py-3 text-center text-white bg-primary">Submit</button>
                </form>

                <h3 class="py-10 text-center">Or contact us… 0333 050 4624 / 01772 497206 or email us: info@p4events.co.uk</h3>

            </div>
        </section>

    </div>

    @includeIf('layouts.footer')

@endsection
