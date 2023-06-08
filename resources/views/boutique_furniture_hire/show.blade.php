@extends('layouts.base')

@section('content')

    @includeIf('layouts.navigation')

    <div class="flex-grow content">
        <h1 class="py-10 text-center text-white bg-midnight-black">{{ $title }}</h1>

        <div class="constraint mx-auto flex flex-col">

            <div class="flex flex-row justify-between">
                <h3 class="my-5 md:my-10 font-normal text-primary">
                    <a href="{{ Statamic::tag('parent') }}">
                        <i class="fa-solid fa-angles-left"></i>
                        Take me back to hire categories
                    </a>
                </h3>

                <my-wishlist></my-wishlist>
            </div>

            <div class="flex flex-row flex-wrap">
                @foreach(Statamic::tag('collection:products')->param('boutique_furniture_hire:contains', $slug) as $product)
                    <a href="{{ $product['permalink'] }}" class="group w-1/3 px-3">
                        <img src="{{ $product['featured_image']['permalink'] }}" alt="{{ $product['featured_image']['alt'] }}" class="border" loading="lazy">
                        <h3 class="my-6 py-3 text-center text-white bg-dim-gray group-hover:bg-primary">{{ $product['title'] }}</h3>
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
