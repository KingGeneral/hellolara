{{-- extend from layouts/master --}}
@extends('layouts.master')

{{-- set title --}}
@section('title','Page Title')

{{-- add to sidebar in master --}}
@section('sidebar')
	<p>This is appended to the master sidebar. from page</p>
@endsection

{{-- add to content in master --}}
@section('content')
	{{-- passing name --}}
    <h2>{{ $name }}</h2>
	<p>This is body content from page</p>

	{{-- iff satement --}}
	<p>Some if statement
		@if($day == 'Saturday')
		<p>Holiday</p>
		@else
		<p>Working</p>
		@endif
	</p>

	{{-- foreach --}}
	<p>take some beer here
		<ul>
			@foreach ($drinks as $row)
			<li>{{ $row }}</li>
			@endforeach
		</ul>
	</p>

	{{-- php function --}}
	<p>Today is {{ date(' D M, Y') }}</p>

@endsection