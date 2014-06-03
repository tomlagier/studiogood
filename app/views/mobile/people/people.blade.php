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

<section id="people-tiles" class="pad-large">

<div class="row profiles">
	<ul id="grid-wrapper" class="large-block-grid-4 medium-block-grid-2 small-block-grid-1 grid-container">		
		@foreach($employees as $employee)
			@if($employee->active)
			<li class="grid-item card-container" id="employee-{{$employee->id}}">
				<div class="grid-item-inner card">	
					<div class="card-inner" style="background: url('/img/thumbnails/{{$employee->thumbnail}}') no-repeat center center; background-size: cover"></div>
					<div class="caption">
						<h5 class="name">{{$employee->name}}</h5>
						<div class="title"><em>{{$employee->job_title}}</em></div>
					</div>

					<div class="modal-content" style="display:none;">
						<div class="modal-pic" style="background: url('/img/profiles/{{$employee->image}}') no-repeat center center; background-size: cover"></div>
						<div class="content">
							<h1 id="employeeName">{{$employee->name}}</h1>
							<div class="employee-title"><em>{{$employee->job_title}}, {{$employee->silly_title}}</em></div>

							<div class="social-icons">
								@foreach($employee->socials as $social)
									<div class="social-link type-{{$social->type}}"><a href="{{$social->profile_link}}" target="_blank"></a></div>
								@endforeach
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

							<div cflass="row" id="whimseys">
								@foreach($employee->whimseys as $whimsey)
								<div class="small-6 columns stat text-center">
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
			@endif
		@endforeach
	</ul>
</div>

</section>

@stop

@section('page-overlays')
<div id="modal">
</div>
<div id="overlay">
	<a href="#" class="close"><img src="/img/btn_close_blue.png" border="0" alt=""></a>
</div>
@stop

@section('page-footer')

@stop

@section('page-scripts')

<script src="/js/mobile-grid.js"></script>

@stop