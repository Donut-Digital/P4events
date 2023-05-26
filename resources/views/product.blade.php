@extends('layouts.base')

@section('content')

    @includeIf('layouts.navigation')


    <div class="flex-grow content">
        <h1 class="py-10 text-center text-white bg-midnight-black">{{ $page->title }}</h1>

        <div class="constraint mx-auto flex flex-col px-4">
            <div class="flex flex-row justify-between">
                <h3 class="my-5 md:my-10 font-normal text-primary">
                    <a href="/boutique-furniture-hire/{{ $page->boutique_furniture_hire->slug }}">
                        <i class="fa-solid fa-angles-left"></i>
                        Take me back to hire items
                    </a>
                </h3>

                <my-wishlist></my-wishlist>
            </div>

            <div class="pb-12">
                <div class="flex flex-row pb-12">
                    <img class="w-2/3 object-cover border" src="{{ $page->featured_image->permalink }}">

                    <div class="flex flex-col gap-4 w-1/3">

                        <img class="ml-4 object-cover border" src="{{ $page->featured_image->permalink }}">
                        @foreach($page->product_images as $img)
                            <img class="ml-4 object-cover border" src="{{ $img->permalink }}">
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-row">
                    <div class="w-2/3">
                        <h4 class="px-8 py-4 text-white bg-dim-gray">{{ $page->title }}</h4>
                        <div class="pt-2 bard">{!! $product_description !!}</div>
                    </div>

                    <div class="w-1/3 pl-4">

                        <add-to-wishlist product="{{ json_encode($page) }}"></add-to-wishlist>

                    </div>
                </div>


            </div>

            @foreach($components as $component)
                @includeIf('components/' .$component['type'])
            @endforeach
        </div>


    </div>

    @includeIf('layouts.footer')

@endsection
