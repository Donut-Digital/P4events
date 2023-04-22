@extends('layouts.base')

@section('content')

    @includeIf('layouts.navigation')


    <div class="content flex-grow">
        <h1 class="text-center text-white py-10 bg-midnight-black">{{ $title }}</h1>

        <div class="flex flex-row constraint mx-auto py-4">
            @foreach(Statamic::tag('collection:products')->param('boutique_furniture_hire:contains', $slug) as $product)
                <a href="{{ $product['permalink'] }}" class="p-3 group">
                    <img src="{{ $product['featured_image']['permalink'] }}">
                    <h3 class="text-center text-white bg-[#6e6e6d] my-6 p-3 group-hover:bg-primary">{{ $product['title'] }}</h3>
                </a>
            @endforeach
        </div>

    </div>

    @includeIf('layouts.footer')

@endsection
