@extends('desktop.layouts.main')

@section('page-tags')

@stop

@section('page-styles')

<link type="text/css" rel="stylesheet" href="/css/grid.css?{{time();}}">	
<link type="text/css" rel="stylesheet" href="/css/flipcard.css?{{time();}}}}">
<link type="text/css" rel="stylesheet" href="/css/work.css?{{time();}}">

@stop

@section('page-header')

@stop

@section('page-content')

<!-- Heading section -->

<section id="work-heading" class="text-divider bg-cover pad-large">

	<div class="row primary-heading">
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

<!-- Grid tiles section -->

<section id="work-tiles" class="pad-large work-tiles">

	<!-- Work tile filters -->

	<div class="row portfolio-filters text-center">
		<span id="good-work" class="filter btn active">Good Work</span><span id="work-for-good" class="filter btn">Work for Good</span>
	</div>

	<!-- Good Work Tiles -->

	<div class="row grid-entries">
		<ul id="container" class="large-block-grid-4 medium-block-grid-2 small-block-grid-1 grid-container caseStudyList">
			@foreach($works as $work)
			@if($work->active && $work->project_type == 'good-work')

			<!-- Individual tile -->

			<li class="grid-item card-container" data-id="{{$work->id}}" data-type="{{$work->project_type}}" data-image="/img/work/main/{{$work->image}}">
				<div class="grid-item-inner card">

					<!-- Tile front -->

					<div class="front">
						<div class="inner">
							<img src="/img/work/thumbnails/{{$work->thumbnail}}" border="0" alt="" />
						</div>
					</div>

					<!-- Tile back -->

					<div class="back">
						<div class="inner text-center">
							<h2>{{$work->project_name}}</h2>
							<div>{{$work->subtitle}}</div>
							<h3>More</h3>
						</div>
					</div>

					<!-- Tile modal -->

					<div class="modal-content row" style="display:none;">
						<a href="" class="close"></a>
						<div class="content medium-12">
							<h1 id="caseName">{{$work->project_name}}</h1>
							<div class="info-section">
								<div>{{nl2br($work->description)}}</div>
							</div>
							@if($work->url)
							<div class="info-section">
									<a href="{{$work->url}}" target="_blank" class="btn project_url">View this project ››</a>
							</div>
							<div class="clear"></div>
							@endif
						</div>
					</div>

				</div>
			</li>
			@endif
			@endforeach
			</ul>

		<!-- Fading filter text -->

		<div id="good-work-text" class="fade-text" style="display: none"><h1>Good Work</h1></div>
		<div id="work-for-good-text" class="fade-text" style="display: none"><h1>Work for Good</h1></div>
	</div>

	<!-- Work for Good tiles -->

	<ul id="hidden-container" class="caseStudyList" style="display:none;">
		@foreach($works as $work)
		@if($work->active && $work->project_type == 'work-for-good')

		<!-- Individual tile -->

		<li class="grid-item card-container" data-id="{{$work->id}}" data-type="{{$work->project_type}}" data-image="/img/work/main/{{$work->image}}">
			<div class="grid-item-inner card">

				<!-- Tile front -->

				<div class="front">
					<div class="inner">
						<img src="/img/work/thumbnails/{{$work->thumbnail}}" border="0" alt="" />
					</div>
				</div>

				<!-- Tile back -->

				<div class="back">
					<div class="inner text-center">
						<h2>{{$work->project_name}}</h2>
						<div>{{$work->subtitle}}</div>
						<h3>More</h3>
						
					</div>
				</div>

				<!-- Tile modal -->

				<div class="modal-content row" style="display:none;">
					<a href="" class="close"></a>
					<div class="content medium-12">
						<h1 id="caseName">{{$work->project_name}}</h1>
						<div class="info-section">
							<div>{{nl2br($work->description)}}</div>
						</div>
						@if($work->url)
						<div class="info-section">
							<a href="{{$work->url}}" target="_blank" class="btn project_url">View this project ››</a>
						</div>
						<div class="clear"></div>
						@endif
					</div>
				</div>

			</div>
		</li>
		@endif
		@endforeach
	</ul>

</section>

@stop

@section('page-overlays')

<!-- Work overlay wrapper -->

<div id="overlay">

	<!-- Work overlay control template -->

	<div class="controls">
		<div class="btn-wrapper prev"><div class="nav-btn"></div></div>
		<div class="btn-wrapper next"><div class="nav-btn"></div></div>
	</div>
</div>

@stop

@section('page-scripts')

<script src="/js/flipcard.js"></script>
<script src="/js/work.js"></script>

@stop