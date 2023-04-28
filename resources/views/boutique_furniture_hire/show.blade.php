@extends('layouts.base')

@section('content')

    @includeIf('layouts.navigation')


    <div class="content flex-grow">
        <h1 class="text-center text-white py-10 bg-midnight-black">{{ $title }}</h1>

        <h3 class="constraint my-12 mx-auto text-primary font-normal">
            <a href="{{ Statamic::tag('parent') }}">
                <i class="fa-solid fa-angles-left"></i>
                Take me back to hire categories
            </a>
        </h3>

        <div class="flex flex-row gap-6 constraint mx-auto">
            @foreach(Statamic::tag('collection:products')->param('boutique_furniture_hire:contains', $slug) as $product)
                <a href="{{ $product['permalink'] }}" class="group">
                    <img src="{{ $product['featured_image']['permalink'] }}">
                    <h3 class="text-center text-white bg-dim-gray my-6 p-3 group-hover:bg-primary">{{ $product['title'] }}</h3>
                </a>
            @endforeach
        </div>

        <section class="border-t border-gray-300 mt-4 bg-[#fcfcfc]">
            <div class="container mx-auto py-10">

                <h3 class="text-center py-10 text-primary">Turn your ideas into action, arrange a free consultation</h3>

                <div id="contact_form_success" class="p-4 mb-4 text-sm text-green-700 rounded-lg bg-green-50 text-center hidden" role="alert">
                    <span class="font-semibold">Success!</span> Thank you for your submission, we will be in touch as soon as possible.
                </div>

                <form id="contact_form" method="post" action="/!/forms/contact_form" class="flex flex-col xl:flex-row justify-center flex-wrap space-y-4 xl:space-x-4">
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

                    <input type="text" name="honeypot" class="honeypot hidden" />

                    <button type="submit" class="py-3 px-10 text-center text-white bg-primary">Submit</button>
                </form>

                <h3 class="text-center py-10">Or contact us… 0333 050 4624 / 01772 497206 or email us: info@p4events.co.uk</h3>

            </div>
        </section>
    </div>

    @includeIf('layouts.footer')

@endsection
