
@if($component['form']->value() === 'contact')
    @php($component = $component['contact'][0])
    @include('components.contact_us_block')
@elseif($component['form']->value() === 'join')
    @php($component = $component['join'][0])
    @include('components.join_us_form_block')
@elseif($component['form']->value() === 'event')
    @php($component = $component['event'][0])
    @include('components.event_form_block')
@endif