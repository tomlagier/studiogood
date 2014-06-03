@extends('desktop.layouts.overheard')

@section('title')
#Overheard at @StudioGood
@stop

@section('page-tags')

@stop

@section('page-styles')

<link type="text/css" rel="stylesheet" href="/css/overheard.css?{{time();}}">

@stop

@section('page-content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=111432265605688&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<div id="background"></div>

<section id="overheard">
	<div id="studiogood-logo"><a href="/"></a></div>
	<div class="row heading-row text-center">
		<h1>#Overheard <a href="/" class="blue">@StudioGood</a></h1>
		<div class="line"></div>
	</div>
	<div class="overheard row text-center">
		<div class="row">
			<span class="columns small-12 overheard-content">{{$overheard->overheard}}</span>
		</div>
		<div class="row">
		<div class="columns small-4 small-offset-8 location row text-right"><span class="location-content">{{$overheard->location}}</span></div>
		</div>
	</div>
	<div class="controls text-center">
		<span id="prev"><a href="/overheard/{{$overheard->prev}}"><h6>Prev</h6></a></span> |  
		<span id="next"><a href="/overheard/{{$overheard->next}}"><h6>Next</h6></a></span>
	</div>
	<div id="social-shares" class="row text-center">
		<div class="fb-like" data-href="http://studiogood.com" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
		<a href="https://twitter.com/share" class="twitter-share-button" data-via="StudioGood" data-hashtags="overheard">Tweet</a>
	</div>
</section>

@stop
