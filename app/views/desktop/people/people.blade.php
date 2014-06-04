@extends('desktop.layouts.main')

@section('page-tags')

@stop

@section('page-styles')

<link type="text/css" rel="stylesheet" href="/css/grid.css?{{time();}}">
<link type="text/css" rel="stylesheet" href="/css/flipcard.css?{{time();}}">
<link type="text/css" rel="stylesheet" href="/css/people.css?{{time()}}">

@stop

@section('page-header')

@stop

@section('page-content')

<section id="people-heading" class="text-divider bg-cover pad-large">

<div class="row profiles-heading">
	<div class="medium-12 columns text-center">
		<div class="page-title">
			<h1 class="text-white">Meet team <strong>good</strong></h1>
			<div class="medium-4 line"></div>
			<div class="text-white"><em>Some sort of something should go here</em></div>
		</div>
	</div>
</div>

<img alt="Slider Background" class="divider-bg" src="/img/contact-background.jpg" />

</section>

<section id="people-tiles" class="pad-large tiles">

<div class="row profiles">
	<ul id="grid-wrapper" class="large-block-grid-4 medium-block-grid-4 small-block-grid-2 grid-container">		
		@foreach($employees as $employee)
		<?php if($employee->active) { ?>
			<li class="grid-item card-container">
				<div class="grid-item-inner card">
					<div class="front">
						<div class="inner" style="background-image: url('/img/thumbnails/{{$employee->thumbnail}}')"></div>
					</div>

					<div class="back">
						<div class="inner text-center">
							<h2>{{$employee->name}}</h2>
							<div>{{$employee->job_title}}</div>
							<h5><strong>LOCATION</strong></h5>
							<div>{{$employee->location}}</div>
							<h3>More</h3>
						</div>
					</div>

					<div class="modal-content row" style="display:none;">
						<div class="profile-pic medium-4 columns" style="background-image: url('/img/profiles/{{$employee->image}}');"></div>
						<div class="content medium-8 columns">
							<div id="heading-row" class="row heading-row">
								<h1 class="columns small-8" id="employeeName">{{$employee->name}}</h1>
								<div id="employee-social" class="columns small-4 employee-social">
									@foreach($employee->socials as $social)
										<div class="social-link type-{{$social->type}}"><a href="{{$social->profile_link}}" target="_blank"></a></div>
									@endforeach
								</div>	
							</div>
							<div class="employee-title">
								<div class="normal"><em>{{$employee->job_title}}</em></div>
								<div class="silly hidden"><em>{{$employee->silly_title}}</em></div>
							</div>

							<div class="info-area">

								<div class="info-section">
									<h4>About Me</h4>
									<div>{{nl2br($employee->biography)}}</div>
								</div>

								<div class="info-section">
									<h4>Location</h4>
									<div>{{$employee->location}}</div>
								</div>

								<div class="info-section">
									<h4>Favorite Charity</h4>
									<div>{{$employee->charity}}</div>
								</div>

								<div class="info-section">
									<h4>Awesome Clients</h4>
									<div>{{$employee->clients}}</div>
								</div>
							</div>
							
							<div class="row" id="whimseys">
								@foreach($employee->whimseys as $whimsey)
								<div class="medium-3 columns stat text-center">
									<div class="icon icon-{{$whimsey->icon1}}"></div>
									<h4>{{$whimsey->quantity1}} {{$whimsey->item1}}</h4>
									<span>{{$whimsey->denominator1}}</span>
								</div><!-- end of individual stat -->
								@endforeach
							</div>

						</div>
					</div>
				</div>
			</li>
			<?php } ?>
		@endforeach
	</ul>
</div>

</section>

@stop

@section('page-overlays')
<div id="modal"></div>
<div id="overlay">
<a href="" class="close"><img src="/img/btn_close_blue.png" border="0" alt=""></a>
</div>
@stop

@section('page-footer')

@stop

@section('page-scripts')

<script src="/js/people.js"></script>
<script src="/js/flipcard.js"></script>

@stop