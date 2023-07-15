@extends('layouts.base')

@section('content')

	@includeIf('layouts.navigation')


	<div class="flex-grow content container m-auto xl:max-w-screen-xl py-8">

		<h1>Page Not Found</h1>
		<p>The page you have requested has not been found, please use the above menu to find what you are looking for.</p>

	</div>

	@includeIf('layouts.footer')

@endsection
