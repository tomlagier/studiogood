@extends('mobile.layouts.main')
{{-- Home page template --}}

@section('page-tags')

@stop

@section('page-styles')

@stop

@section('page-header')

@stop

@section('page-content')

	<div id="loader">
		<div id="progress-bar"></div>
	</div>
	
	<div id="main-container">
		@include('mobile.home.chunks.video')
		@include('mobile.home.chunks.about')
		@include('mobile.home.chunks.slider')
		@include('mobile.home.chunks.image')
		@include('mobile.home.chunks.stats')
	</div>

@stop

@section('page-overlays')

@stop

@section('page-footer')

@stop

@section('page-scripts')

@stop