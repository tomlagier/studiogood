@extends('desktop.layouts.main')

@section('title')
StudioGood Jobs | Details
@stop

@section('page-styles')
<link type="text/css" rel="stylesheet" href="/css/jobs.css?{{time()}}">
@stop


@section('page-content')

<!-- Job details page heading -->

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

<!-- Job details info section -->

<section id="jobs_details" class="pad-large">
	<div class="row">
		<div class="medium-12 columns text-center">
			<div class="page-title">
				<h1 class="blue-last">{{$job->title}}</h1>
				<h4>{{$job->location}}</h4>
			</div>
		</div>
	</div>
	<div class="row post-single-text">
		<div class="medium-10 medium-centered columns">	
			<p>{{nl2br($job->heading)}}</p>	
			<p>{{nl2br($job->description)}}</p>
		</div>
		<a href="/jobs" class="btn job_back">Back</a>
		<a href="" class="btn job_application">APPLY FOR THIS POSITION</a>
	</div>
</section>
@stop