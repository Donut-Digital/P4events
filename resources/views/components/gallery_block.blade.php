<div class="mx-auto container xl:max-w-screen-xl px-4 py-2">

    @if($component['title'])
        <h2 class="pb-4">{{ $component['title'] }}</h2>
    @endif

    @if($component['gallery_type'] == 'col')

        <!-- Only one image has been uploaded -->
        @if (count($component['gallery']) <= 2)

            <div class="flex flex-row gap-4">
                <img src="{{ $component['gallery'][0]['permalink'] }}" alt="{{ $component['gallery'][0]['alt'] }}" class="min-w-0 flex-1 object-cover" loading="lazy">

                @if(isset($component['gallery'][1]))
                    <img src="{{ $component['gallery'][1]['permalink'] }}" alt="{{ $component['gallery'][1]['alt'] }}" class="min-w-0 flex-1 object-cover" loading="lazy">
                @endif
            </div>

        @elseif(count($component['gallery']) == 3)
            <?php $firstImage = $component['gallery'][0]; ?>
            <?php $secondImage = $component['gallery'][1]; ?>
            <?php $thirdImage = $component['gallery'][2]; ?>
        <!-- Position last two image on the left into two rows -->
            <!-- $component['image_position'] == 'Left' -->

            <div class="flex gap-4">
                <div @class(["w-1/3 flex flex-col justify-between gap-4","order-last"=>$component['main_image_position']->value() === 'Left'])>
                    <img src="{{ $firstImage['permalink'] }}" alt="{{ $firstImage['alt'] }}" class="w-full h-1/2 object-cover" loading="lazy">
                    <img src="{{ $secondImage['permalink'] }}" alt="{{ $secondImage['alt'] }}" class="w-full h-1/2 object-cover" loading="lazy">
                </div>
                <div class="w-2/3">
                    <img class="w-full h-full object-cover" src="{{ $thirdImage['permalink'] }}" alt="{{ $thirdImage['alt'] }}" loading="lazy">
                </div>
            </div>

        @endif

    @elseif($component['gallery_type'] == 'row')

        <div class="flex flex-col lg:flex-row gap-5">
            @foreach($component['gallery'] as $image)
                <img class="object-cover h-full w-full lg:w-1/3 h-[250px] min-w-0" src="{{ $image['permalink'] }}" alt="{{ $image['alt'] }}" loading="lazy">
            @endforeach
        </div>

    @endif
</div>