
@if($component['wishlist']->value() === 'view')
    @include('components.view_wishlist')
@elseif($component['wishlist']->value() === 'create')
    @include('components.submit_wishlist')
@endif