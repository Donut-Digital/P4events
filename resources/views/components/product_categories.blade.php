<section class="constraint mx-auto py-5 md:py-10 px-4 flex flex-col md:flex-row md:gap-8">
    @foreach($component['categories'] as $category)
        <a class="group mt-6 md:mt-0" href="{{ $category['category']['permalink'] }}">
            <img class="w-full" src="{{ $category['category_image']['permalink'] }}">
            <h3 class="bg-primary group-hover:bg-dim-gray text-white text-center py-4 mt-6">{{ $category['category']['title'] }}</h3>
        </a>
    @endforeach
</section>