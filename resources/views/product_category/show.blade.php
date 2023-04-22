@extends('layouts.base')

@section('content')

    @includeIf('layouts.navigation')


    <div class="content flex-grow">
        <h1 class="text-center text-white py-10 bg-midnight-black">{{ $title }}</h1>
    </div>

    @includeIf('layouts.footer')

@endsection
