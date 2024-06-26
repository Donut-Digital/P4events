@extends('layouts.base')

@section('content')

    @includeIf('layouts.navigation')


    <div class="flex-grow content">

        @foreach($components as $component)

            @includeIf('components/' .$component['type'])

        @endforeach

    </div>

    @includeIf('layouts.footer')

@endsection
