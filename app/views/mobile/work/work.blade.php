@extends('mobile.layouts.main')

@section('page-tags')

@stop

@section('page-styles')

<link type="text/css" rel="stylesheet" href="/css/mobile-grid.css?{{time();}}">	
<link type="text/css" rel="stylesheet" href="/css/mobile-people.css?{{time();}}">

@stop

@section('page-header')

@stop

@section('page-content')

<section id="work-heading" class="text-divider bg-cover pad-large">

	<div class="row portfolio-heading">
		<div class="medium-12 columns text-center">
			<div class="page-title">
				<h1 class="text-white">Our <strong>work</strong></h1>
				<div class="medium-4 line"></div>
				<div class="text-white"><em>Subhead goes here, just like every other heading</em></div>
			</div>
		</div>
	</div>

	<img alt="Slider Background" class="divider-bg" src="/img/contact-background.jpg" />

</section>

<section id="work-tiles" class="pad-large">

<div class="row portfolio-entries">
	<ul id="container" class="large-block-grid-4 medium-block-grid-2 small-block-grid-1 grid-container">
		@foreach($works as $work)
		@if($work->active)
		<li class="grid-item card-container" data-type="{{$work->project_type}}" id="case-study-{{$work->id}}">
			<div class="grid-item-inner card">
				<div class="card-inner" style="background: url('/img/work/thumbnails/{{$work->thumbnail}}') no-repeat center center; background-size: cover;"></div>
				<div class="caption">
					<h5 class="name">{{$work->project_name}}</h5>
					<h6 class="subhead">{{$work->subtitle}}</h6>
				</div>

				<div class="modal-content" style="display:none;">
					<div class="modal-pic" style="background: url('/img/work/main/{{$work->image}}') no-repeat center center; background-size: cover;"></div>
					<div class="content medium-8 columns">
						<h1>{{$work->project_name}}</h1>
						<div class="info-section">
							<h4>Type</h4>
							<div>{{$work->subtitle}}</div>
						</div>
						<div class="info-section">
							<h4>Project Description</h4>
							<div>{{nl2br($work->description)}}</div>
						</div>
						<div class="info-section">
							<h4>Objectives</h4>
							<div>{{nl2br($work->objectives)}}</div>
						</div>
						<div class="info-section">
							<h4>Solution</h4>
							<div>{{nl2br($work->solution)}}</div>
						</div>
						@if($work->end_results)
						<div class="info-section">
							<h4>Results</h4>
							<div>{{nl2br($work->end_results)}}</div>
						</div>
						@endif
						@if($work->url)
						<div class="info-section text-center">
								<a href="{{$work->url}}" target="_blank" class="btn project_url">View this project ››</a>
						</div>
						@endif
					</div>
				</div>
			</div>
		</li>
		@endif
		@endforeach
	</ul>
</div>

@stop

@section('page-overlays')

<div id="modal"></div>
<div id="overlay">
	<a href="" class="close"><img src="/img/btn_close_blue.png" border="0" alt=""></a>
</div>

<script>
$(document).ready(function() {
	$("a.close").on("click", function(e) {
		e.preventDefault();
		$("#modal").click();
	});
});
</script>

@stop

@section('page-footer')

@stop

@section('page-scripts')

<script src="/js/mobile-grid.js"></script>

@stop