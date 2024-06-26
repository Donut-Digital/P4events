<section class="mx-auto container xl:max-w-screen-xl flex flex-wrap gap-4 py-2 px-4">

        @foreach($component['hero_sections'] as $hero_block)
            <div @class(['relative inline-block hero-block',
                         'w-full'=>$loop->index == 0 || $loop->index % 3 == 0,
                         'basis-full lg:basis-1/3 lg:flex-1 max-h-[450px]'=>$loop->index !== 0 && $loop->index % 3 !== 0])>

                <img class="w-full h-full object-cover" src="{{ $hero_block['hero_image'] }}" alt="{{ $hero_block['hero_image']['alt'] }}" loading="lazy">

                @if($hero_block['bard_color'] && $hero_block['bard_field'])

                    <div @class(['w-full lg:w-4/5 md:absolute bottom-0 p-6 lg:p-8 lg:mb-20',
                                 'lg:text-right lg:right-0' => $loop->index == 0 || $loop->index % 3 == 0,
                                 'text-left lg:left-0'=>$loop->index !== 0 && $loop->index % 3 !== 0,
                                 "bard-light"=>$hero_block['light_text'],
                                 "bard-dark"=>!$hero_block['light_text']])
                         style="background-color: {{ $hero_block['bard_color'] }}e8;">

                        @if($hero_block['link'])
                            <a href="{{$hero_block['link']['permalink']}}">
                                {!! $hero_block['bard_field'] !!}
                            </a>
                        @else
                            {!! $hero_block['bard_field'] !!}
                        @endif

                    </div>
                @endif
            </div>

        @endforeach

</section>