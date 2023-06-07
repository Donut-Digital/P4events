<section class="border-t border-gray-300 bg-[#fcfcfc] mt-2 px-4 py-5">
    <div class="container mx-auto">
        <h3 class="py-10 text-center text-primary">{{ $component['title'] }}</h3>

        <div id="contact_form_success" class="mb-4 hidden rounded-lg bg-green-50 p-4 text-center text-sm text-green-700"
            role="alert">
            <span class="font-semibold">Success!</span> Thank you for your submission, we will be in touch as soon as
            possible.
        </div>

        <contact-us-form csrf="{{ csrf_token() }}" origin="{{ $component['type'] }}"></contact-us-form>

    <h3 class="py-10 text-center">{{ $component['subtitle'] }}</h3>
    </div>
</section>

