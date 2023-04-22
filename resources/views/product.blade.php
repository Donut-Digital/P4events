@extends('layouts.base')

@section('content')

    @includeIf('layouts.navigation')


    <div class="content flex-grow">
        {{ $product_title }}
    </div>

    @includeIf('layouts.footer')

@endsection
