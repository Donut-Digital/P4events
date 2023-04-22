@extends('layouts.base')

@section('content')

    @includeIf('layouts.navigation')


    <div class="content flex-grow">
        {{ $title }}
    </div>

    @includeIf('layouts.footer')

@endsection
