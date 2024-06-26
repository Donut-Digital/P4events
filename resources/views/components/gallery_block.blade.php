<div class="mx-auto container xl:max-w-screen-xl px-4 py-2">

    @if($component['title'])
        <h2 class="pb-4">{{ $component['title'] }}</h2>
    @endif

    @if($component['gallery_type'] == 'col' && count($component['gallery']) > 2)

        <?php $firstImage = $component['gallery'][0]; ?>
        <?php $secondImage = $component['gallery'][1]; ?>
        <?php $thirdImage = $component['gallery'][2]; ?>
        <!-- Position last two image on the left into two rows -->
        <!-- $component['image_position'] == 'Left' -->

        <div class="flex gap-4">

            <div @class(["w-1/3 flex flex-col justify-between gap-4","order-last"=>$component['main_image_position']->value() === 'left'])>

                <div class='relative inline-block hero-block w-full h-full'>
                    <img class="w-full h-full object-cover" src="{{ $firstImage['image']['permalink'] }}" alt="{{ $firstImage['image']['alt'] }}" loading="lazy">

                    @if($firstImage['add_cta'] && $firstImage['entry'])
                        <a href="{{ $firstImage['entry']['permalink'] }}" class='cursor-pointer w-full h-full flex flex-col opacity-0 hover:opacity-100 transition-all flex items-center justify-center md:absolute bottom-0' style="background-color: #e22631d4">
                            <h3 class="text-white font-medium">{{ $firstImage['title'] }}</h3>
                            <p class="text-white"> {{$firstImage['description']}}</p>
                        </a>
                    @endif
                </div>

                <div class="relative inline-block hero-block w-full h-full">
                    <img class="w-full h-full object-cover" src="{{ $secondImage['image']['permalink'] }}" alt="{{ $secondImage['image']['alt'] }}" loading="lazy">

                    @if($secondImage['add_cta'] && $secondImage['entry'])
                        <a href="{{ $secondImage['entry']['permalink'] }}" class='cursor-pointer w-full h-full flex flex-col opacity-0 hover:opacity-100 transition-all flex items-center justify-center md:absolute bottom-0' style="background-color: #e22631d4">
                            <h3 class="text-white font-medium">{{ $secondImage['title'] }}</h3>
                            <p class="text-white"> {{$secondImage['description']}}</p>
                        </a>
                    @endif
                </div>

            </div>

            <div class='w-2/3 relative inline-block hero-block w-full'>
                <img class="w-full h-full object-cover" src="{{ $thirdImage['image']['permalink'] }}" alt="{{ $thirdImage['image']['alt'] }}" loading="lazy">

                @if($thirdImage['add_cta'] && $thirdImage['entry'])
                    <a href="{{ $thirdImage['entry']['permalink'] }}" class='cursor-pointer w-full h-full flex flex-col opacity-0 hover:opacity-100 transition-all flex items-center justify-center md:absolute bottom-0' style="background-color: #e22631d4">
                        <h3 class="text-white font-medium">{{ $thirdImage['title'] }}</h3>
                        <p class="text-white"> {{$thirdImage['description']}}</p>
                    </a>
                @endif
            </div>

        </div>

    @elseif($component['gallery_type'] == 'row' || count($component['gallery']) <= 2)

        <div class="flex flex-col lg:flex-row gap-5">
            @foreach($component['gallery'] as $image)

                <div class='relative inline-block hero-block object-cover w-full flex-1 lg:w-1/3'>
                    <img class="w-full h-full object-cover" src="{{ $image['image']['permalink'] }}" alt="{{ $image['image']['alt'] }}" loading="lazy">

                    @if($image['add_cta'] && $image['entry'])
                        <a href="{{ $image['entry']['permalink'] }}" class='cursor-pointer w-full h-full flex flex-col opacity-0 hover:opacity-100 transition-all flex items-center justify-center md:absolute bottom-0' style="background-color: #e22631d4">
                            <h3 class="text-white font-medium">{{ $image['title'] }}</h3>
                            <p class="text-white"> {{$image['description']}}</p>
                        </a>
                    @endif
                </div>

              @endforeach
        </div>

    @endif
</div>