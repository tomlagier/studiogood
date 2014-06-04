@extends('desktop.layouts.overheard')

@section('title')
#Overheard at @StudioGood
@stop

@section('page-tags')

@stop

@section('page-styles')
<link type="text/css" rel="stylesheet" href="/css/overheard.css?{{time();}}">
@stop

@section('page-scripts')
<script src="/js/social-shares.js"></script>
@stop

@section('page-content')

<!-- Facebook root -->

<div id="fb-root"></div>

<!-- Background -->

<div id="background"></div>

<!-- Primary overheard page content -->

<section id="overheard">

	<!-- Link to main site -->

	<div id="studiogood-logo">
		<a href="/"></a>
	</div>

	<!-- Overheard heading -->

	<div class="row heading-row text-center">
		<h1>#Overheard <a href="/" class="blue">@StudioGood</a></h1>
		<div class="line"></div>
	</div>

	<!-- Overheard content -->

	<div class="overheard row text-center">
		<div class="row">
			<span class="columns small-12 overheard-content">{{$overheard->overheard}}</span>
		</div>
		<div class="row">
		<div class="columns small-4 small-offset-8 location row text-right"><span class="location-content">{{$overheard->location}}</span></div>
		</div>
	</div>

	<!-- Navigation -->

	<div class="controls text-center">
		<span id="prev"><a href="/overheard/{{$overheard->prev}}"><h6>Prev</h6></a></span> |  
		<span id="next"><a href="/overheard/{{$overheard->next}}"><h6>Next</h6></a></span>
	</div>

	<!-- Social shcares -->

	<div id="social-shares" class="row text-center">
		<div class="fb-like" data-href="http://studiogood.com" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
		<a href="https://twitter.com/share" class="twitter-share-button" data-via="StudioGood" data-hashtags="overheard">Tweet</a>
	</div>

</section>
@stop
