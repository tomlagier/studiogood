@extends('desktop.layouts.main')

@section('title')
StudioGood Jobs
@stop

@section('page-styles')
<link type="text/css" rel="stylesheet" href="/css/jobs.css?{{time()}}">
@stop

@section('page-content')

<!-- Jobs heading -->

<section id="jobs-heading" class="text-divider bg-cover pad-large">
	<div class="row profiles-heading">
		<div class="medium-12 columns text-center">
			<div class="page-title">
				<h1 class="text-white">StudioGood <strong>Careers</strong></h1>
				<div class="medium-4 line"></div>
				<div class="text-white"><em>Let's Do Some Good Together</em></div>
			</div>
		</div>
	</div>
	<img alt="Slider Background" class="divider-bg" src="/img/background-jobs2.jpg" />
</section>

<!-- Jobs tiles -->

<section id="jobs" class="pad-large">
	<div class="row">
		@foreach($jobs as $job)
		@if($job->active)
		<div class="medium-4 columns offix job_tile">
			<div class="service">
				<div class="service-text">
					<div class="service-icon">
						<div class="icon icon-{{$job->icon}}"></div>
					</div>
					<h1 class="blue-last job-title">{{$job->title}}</h1>
					<h5 class="job-location">{{$job->location}}</h5>
					<div class="line"></div>
					<p class="job-summary">{{$job->heading}}</p>
				</div>
				<div class="line"></div>
				<a href="/details/{{$job->id}}"><div class="btn"><h6 class="alt-h">Details</h6></div></a>
			</div>
		</div>
		@endif
		@endforeach
	</div>
</section>
@stop