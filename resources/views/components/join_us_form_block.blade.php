<section class="container mx-auto py-10">
    <div class="flex flex-col xl:flex-row text-center xl:text-left items-center xl:items-start justify-center gap-4">
        {{-- Image --}}
        <div class="w-2/3 xl:w-1/3">
            <div class="flex flex-col h-full">
                <img src="{{ $component['main_image'] }}">
                <div class="p-5" style="background-color: var(--theme-primary-colour)">
                    <p class="font-bold" style="color: #FFF;">{{ $component['image_title'] }}</p>
                    <p style="color: #FFF;">{{ $component['image_sub_description'] }}</p>
                </div>
            </div>
        </div>


        {{-- Form details --}}
        <div id="join_us" class="w-2/3 px-0 xl:px-4 flex flex-col gap-8 ">
            <form class="flex flex-col gap-4" method="post" action="/!/forms/forms">
                @csrf

                <div class="field flex flex-col justify-start items-stretch">
                    <label for="name" class="mb-2">Your Name:*</label>
                    <input type="text" name="name" id="name" required>
                </div>

                <div class="field flex flex-col justify-start items-stretch">
                    <label for="number" class="mb-2">Your Number:</label>
                    <input type="text" name="number" id="number">
                </div>

                <div class="field flex flex-col justify-start items-stretch">
                    <label for="email" class="mb-2">Your Email Address:*</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="field flex flex-col justify-start items-stretch">
                    <label for="introduction" class="mb-2">Introduce Yourself:</label>
                    <textarea name="introduction" id="introduction" class="h-32" style="resize: none;"></textarea>
                </div>

                <div class="flex justify-between gap-4">
                    <div>
                        <h1>Upload
                            Headshot</h1>
                        <input type="file" src="img_submit.gif" name="headshot" width="48" height="48">
                    </div>

                    {{-- <input class="p-4 flex-1 bg-primary text-white">Upload
                    Document --}}
                </div>


                <input name="origin" class="hidden" value="{{ $component['type'] }}">

                <div class="flex flex-col gap-4">
                    <a class="cursor-pointer" href="{{ $component['terms_conditions_file'] }}" download><strong
                            class="underline underline-offset-2">View Terms and
                            conditions</strong></a>
                    <div class="flex content-center">
                        <input type="checkbox" id="terms" name="terms" value="Agreed" class="mr-4 cursor-pointer">
                        <label for="terms" class="cursor-pointer">I have read the terms and conditions</label><br>
                    </div>

                    <button class="p-4 my-4 self-start bg-primary text-white">Submit</button>
                </div>
            </form>


        </div>
    </div>
</section>
