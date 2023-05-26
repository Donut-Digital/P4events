<section class="mx-auto container xl:max-w-screen-xl">

        @foreach($component['hero_sections'] as $hero_block)
            <div @class(['relative inline-block hero-block',
                         'w-full p-4' => $loop->index == 0,
                         'w-1/2 px-4'=>$loop->index !== 0])>

                <img class="w-full" src="{{ $hero_block['hero_image'] }}">

                @if($hero_block['bard_color'] && $hero_block['bard_field'])

                    <div @class(['lg:w-4/5 md:absolute bottom-0 p-8 lg:mb-20',
                                 'text-right right-4' => $loop->index == 0,
                                 'text-left left-4'=>$loop->index !== 0,
                                 "bard-light"=>$hero_block['light_text'],
                                 "bard-dark"=>!$hero_block['light_text']])
                         style="background-color: {{ $hero_block['bard_color'] }};">

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