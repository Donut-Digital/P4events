<section class="border-t border-gray-300 bg-[#fcfcfc]">
    <div class="container mx-auto py-10 px-4">
        <h3 class="text-center py-10 text-primary">{{ $component['title'] }}</h3>

        <div id="contact_form_success" class="p-4 mb-4 text-sm text-green-700 rounded-lg bg-green-50 text-center hidden"
            role="alert">
            <span class="font-semibold">Success!</span> Thank you for your submission, we will be in touch as soon as
            possible.
        </div>

        <contact-us-form csrf="{{ csrf_token() }}" origin="{{ $component['type'] }}"></contact-us-form>

    <h3 class="text-center py-10">{{ $component['subtitle'] }}</h3>
    </div>
</section>

