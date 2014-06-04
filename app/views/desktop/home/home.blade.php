@extends('desktop.layouts.main')
{{-- Desktop home page --}}

@section('page-tags')

{{-- IE compatability for video --}}
<script type="text/javascript">
  document.createElement('video');document.createElement('audio');document.createElement('track');
</script>

@stop

@section('page-styles')
<link href="//vjs.zencdn.net/4.5/video-js.css" rel="stylesheet">
<link href="/css/slider.css" rel="stylesheet">
@stop

@section('page-header')

{{-- Secondary nav for homepage --}}

@include('desktop.home.chunks.nav');
@include('desktop.home.chunks.social');

@stop

@section('page-content')

	<div id="loader">
		<div id="progress-bar"></div>
	</div>
	
	{{-- Content separated into chunks for ease of rearrangement --}}
	<div id="main-container">
		@include('desktop.home.chunks.video')
		@include('desktop.home.chunks.about')
		@include('desktop.home.chunks.slider')
		@include('desktop.home.chunks.image')
		@include('desktop.home.chunks.stats')
	</div>

@stop

@section('page-overlays')

@stop

@section('page-footer')

@stop

@section('page-scripts')

{{-- For Video.js/Background video --}}
<script src="//vjs.zencdn.net/4.5/video.js"></script>
<script src="/js/video.js"></script>
<script src="/js/slider.js"></script>
@stop