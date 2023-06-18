<section class="container m-auto xl:max-w-screen-xl py-8">
    <ul class="list-disc">
    <li><a href="/" class="text-primary">P4 Events Home</a></li>

    @foreach (Statamic::tag('nav:main_navigation') as $page)
        <li>
            <a href="{{ $page['permalink'] }}" class="text-primary">{{ $page['title'] }}</a>

            @if($page['children'])
                 <ul class="list-disc ml-4">
                @foreach($page['children'] as $child)
                    <li><a href="{{ $child['permalink'] }}" class="text-primary">{{ $child['title'] }}</a></li>
                @endforeach
                </ul>
            @endif
        </li>
    @endforeach

    @foreach (Statamic::tag('taxonomy:boutique_furniture_hire') as $page)
        <li><a href="{{ $page['permalink'] }}" class="text-primary">{{ $page['title'] }}</a>

        <ul class="list-disc ml-4">
            @foreach(Statamic::tag('collection:products')->param('boutique_furniture_hire:contains', $page['slug']) as $product)
                <li><a href="{{ $product['permalink'] }}" class="text-primary">{{ $product['title'] }}</a></li>
            @endforeach
        </ul>

        </li>

    @endforeach

    </ul>
</section>