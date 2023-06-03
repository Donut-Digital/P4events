<div class="mx-auto container xl:max-w-screen-xl p-4">
    <!-- Only one image has been uploaded -->

    @if (count($component['images']) <= 2)

        <div class="flex flex-row gap-4">
            <img src="{{ $component['images'][0]['permalink'] }}" alt="your-image-description" class="min-w-0 flex-1 object-cover">

            @if(isset($component['images'][1]))
                <img src="{{ $component['images'][1]['permalink'] }}" alt="your-image-description" class="min-w-0 flex-1 object-cover">
            @endif
        </div>

    @elseif(count($component['images']) == 3)
        <?php $firstImage = $component['images'][0]; ?>
        <?php $secondImage = $component['images'][1]; ?>
        <?php $thirdImage = $component['images'][2]; ?>
        <!-- Position last two image on the left into two rows -->
        <!-- $component['image_position'] == 'Left' -->

            <div class="flex gap-4">
                <div @class(["w-1/3 flex flex-col justify-between gap-4","order-last"=>$component['image_position']->value() === 'Left'])>
                    <img src="{{ $firstImage['permalink'] }}" class="w-full h-full">
                    <img src="{{ $secondImage['permalink'] }}" class="w-full h-full">
                </div>
                <div class="w-2/3">
                    <img class="w-full" src="{{ $thirdImage['permalink'] }}">
                </div>
            </div>

    @endif
</div>
