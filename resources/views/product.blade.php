@extends('layouts.base')

@section('content')

    @includeIf('layouts.navigation')


    <div class="flex-grow content">
        <h1 class="py-10 text-center text-white bg-midnight-black">{{ $page->title }}</h1>

        <h3 class="mx-auto my-12 font-normal constraint text-primary">
            <a href="/boutique-furniture-hire/{{ $page->boutique_furniture_hire->slug }}">
                <i class="fa-solid fa-angles-left"></i>
                Take me back to hire items
            </a>
        </h3>

        <div class="mx-auto pb-12 constraint">
            <div class="flex flex-row pb-12">
                <img class="w-2/3" src="{{ $page->featured_image->permalink }}">

                <div class="flex flex-col gap-4 1/3">

                    <img class="pl-4" src="{{ $page->featured_image->permalink }}">
                    @foreach($page->product_images as $img)
                        <img class="pl-4" src="{{ $img->permalink }}">
                    @endforeach
                </div>
            </div>

            <div class="w-2/3">
                <h4 class="px-8 py-4 text-white bg-dim-gray">{{ $page->title }}</h4>
                <div class="pt-2 bard">{!! $product_description !!}</div>
            </div>

        </div>

        @foreach($components as $component)
            @includeIf('components/' .$component['type'])
        @endforeach
    </div>

    @includeIf('layouts.footer')

@endsection
