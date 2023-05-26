<section class="mx-auto constraint px-4 py-5 md:py-10 flex flex-col items-end">

    <my-wishlist></my-wishlist>

    <div class="flex flex-col md:flex-row md:gap-8 mt-5 md:mt-10">
        @foreach($component['categories'] as $category)
            <a class="mt-6 group md:mt-0" href="{{ $category['category']['permalink'] }}">
                <img class="w-full" src="{{ $category['category_image']['permalink'] }}">
                <h3 class="mt-6 py-4 text-center text-white bg-primary group-hover:bg-dim-gray">{{ $category['category']['title'] }}</h3>
            </a>
        @endforeach
    </div>
</section>