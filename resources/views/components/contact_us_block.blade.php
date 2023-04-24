<section class="container mx-auto py-10">

    <h3 class="text-center py-10 text-primary">{{ $component['title'] }}</h3>

    <div id="contact_form_success" class="p-4 mb-4 text-sm text-green-700 rounded-lg bg-green-50 text-center hidden"
        role="alert">
        <span class="font-semibold">Success!</span> Thank you for your submission, we will be in touch as soon as
        possible.
    </div>

    <form id="contact_form" method="post" action="/!/forms/forms"
        class="flex flex-col xl:flex-row justify-center flex-wrap space-y-4 xl:space-x-4">
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

        <input name="origin" class="hidden" value="{{ $component['type'] }}">

        <button type="submit" class="py-3 px-10 text-center text-white bg-primary">Submit</button>
    </form>

    <h3 class="text-center py-10">{{ $component['subtitle'] }}</h3>
</section>
