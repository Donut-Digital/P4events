<div class="container xl:max-w-6xl mx-auto py-2 px-4 md:px-0">
    <!-- Only one image has been uploaded -->
    @if (count($component['images']) == 1)
        <?php $firstImage = $component['images'][0]; ?>
        <div>
            <img src="{{ $firstImage['permalink'] }}" alt="your-image-description" class="w-full">
        </div>
    @elseif(count($component['images']) == 2)
        <?php $firstImage = $component['images'][0]; ?>
        <?php $secondImage = $component['images'][1]; ?>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <img class="h-full" src="{{ $firstImage['permalink'] }}">
            </div>

            <div>
                <img class="h-full" src="{{ $secondImage['permalink'] }}">
            </div>
        </div>
    @else
        <?php $firstImage = $component['images'][0]; ?>
        <?php $secondImage = $component['images'][1]; ?>
        <?php $thirdImage = $component['images'][2]; ?>
        <!-- Position last two image on the left into two rows -->
        @if ($component['image_position'] == 'Left')
            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-1">
                    <div class="pb-4">
                        <img src="{{ $firstImage['permalink'] }}">
                    </div>
                    <div>
                        <img src="{{ $secondImage['permalink'] }}">
                    </div>
                </div>
                <div class="col-span-1">
                    <img class="h-full" src="{{ $thirdImage['permalink'] }}">
                </div>
            </div>
        @elseif($component['image_position'] == 'Right')
            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-1">
                    <img class="h-full" src="{{ $thirdImage['permalink'] }}">
                </div>
                <div class="col-span-1">
                    <div class="pb-4">
                        <img src="{{ $firstImage['permalink'] }}">
                    </div>
                    <div>
                        <img src="{{ $secondImage['permalink'] }}">
                    </div>
                </div>

            </div>
        @endif
    @endif
</div>
