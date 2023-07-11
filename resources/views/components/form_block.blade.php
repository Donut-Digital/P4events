
@if($component['form']->value() === 'contact')
    @php($component = $component['contact'][0])
    @nocache('components.contact_us_block')
@elseif($component['form']->value() === 'join')
    @php($component = $component['join'][0])
    @nocache('components.join_us_form_block')
@elseif($component['form']->value() === 'event')
    @php($component = $component['event'][0])
    @nocache('components.event_form_block')
@endif