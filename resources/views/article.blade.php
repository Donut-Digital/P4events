@extends('layouts.base')

@section('content')

    @includeIf('layouts.navigation')


    <div class="flex-grow content">

        <!-- categories & recent posts - start -->
        @php($categories = \Statamic\Facades\Term::query()->where('taxonomy', 'category')->get())
        @php($recent_entries = \Statamic\Facades\Entry::query()->where('collection', 'articles')->orderBy('date', 'desc')->limit(9)->get())

        <article-filter-block :categories="{{ $categories }}" :latest="{{ $recent_entries }}"></article-filter-block>
        <!-- categories & recent posts - end -->

        @foreach($components as $component)

            @includeIf('components/' .$component['type'])

        @endforeach

        <!-- share on socials block - start -->
        <ul class="mx-auto container xl:max-w-screen-xl flex flex-col lg:flex-row justify-between px-20 py-8 text-davy-gray fill-davy-gray">
            <!-- Facebook -->
            <a href="https://twitter.com/share?url={{ $permalink->value() }}/" target="_blank" class="text-lg text-center py-2">
                <i class="fa-brands fa-facebook-f pr-10 text-2xl"></i>
                <span>Share on Facebook</span>
            </a>

            <!-- Twitter -->
            <a href="https://twitter.com/share?url={{ $permalink->value() }}/" target="_blank" class="text-lg text-center py-2">
                <i class="fa-brands fa-twitter pr-10 text-2xl"></i>
                <span>Share on Twitter</span>
            </a>

            <!-- Pinterest -->
            <a href="https://www.pinterest.co.uk/pin/create/button/?url={{ $permalink->value() }}/" target="_blank" class="text-lg text-center py-2">
                <i class="fa-brands fa-pinterest-p pr-10 text-2xl"></i>
                <span>Share on Pinterest</span>
            </a>
        </ul>
        <!-- share on socials block - end -->

        @php($component = ['title'=>$contact_us_form->raw()[0]['title'],'subtitle'=>$contact_us_form->raw()[0]['subtitle'],'type'=>'contact_us_block'])
        @include('components/contact_us_block')

    </div>

    @includeIf('layouts.footer')

@endsection
