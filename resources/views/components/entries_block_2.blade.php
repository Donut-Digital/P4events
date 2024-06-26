<div class="mx-auto container xl:max-w-screen-xl px-4 py-2 flex flex-col lg:flex-row gap-5">
    @foreach($component['entries'] as $entry)

        <a href="{{ $entry['entry']['permalink'] }}" @class(['relative inline-block w-full flex-1 lg:w-1/3'])>

            <img class="object-cover h-full w-full" src="{{ $entry['entry_image']['permalink'] }}" alt="{{ $entry['entry_image']['alt'] }}" loading="lazy">

            <div @class(['md:absolute w-full h-full bottom-0 flex justify-center'])>
                <div @class(['h-fit w-full md:w-max text-center my-auto text-xl p-4',
                             'text-white'=>$entry['light_text'],
                             'text-davy-gray'=>!$entry['light_text']]) style="background-color: {{ $entry['label_background'] }}cc;">
                    {{ $entry['entry']['title'] }}
                </div>

            </div>

        </a>
    @endforeach
</div>