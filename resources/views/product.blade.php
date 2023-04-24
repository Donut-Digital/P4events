@extends('layouts.base')

@section('content')

    @includeIf('layouts.navigation')


    <div class="content flex-grow">
        <h1 class="text-center text-white py-10 bg-midnight-black">{{ $page->title }}</h1>

        <h3 class="constraint my-12 mx-auto text-primary font-normal">
            <a href="/boutique-furniture-hire/{{ $page->boutique_furniture_hire->slug }}">
                <i class="fa-solid fa-angles-left"></i>
                Take me back to hire items
            </a>
        </h3>

        <div class="constraint mx-auto pb-12">
            <div class="flex flex-row pb-12">
                <img class="w-2/3" src="{{ $page->featured_image->permalink }}">

                <div class="1/3 flex flex-col gap-4">

                    <img class="pl-4" src="{{ $page->featured_image->permalink }}">
                    @foreach($page->product_images as $img)
                        <img class="pl-4" src="{{ $img->permalink }}">
                    @endforeach
                </div>
            </div>

            <div class="w-2/3">
                <h4 class="text-white bg-[#6e6e6d] px-8 py-4">{{ $page->title }}</h4>
                <div class="bard">{!! $product_description !!}</div>
            </div>

        </div>

        @foreach($components as $component)
            @includeIf('components/' .$component['type'])
        @endforeach
    </div>

    @includeIf('layouts.footer')

@endsection
