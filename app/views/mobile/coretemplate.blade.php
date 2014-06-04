@extends('mobile.layouts.main')

{{-- This template shows all extendable sections in the main DESKTOP layout --}}
{{-- Copy all code below these comments into a new blade to be your page template --}}
{{-- Create page template chunks in views/{template}/chunks and @include them in the content areas below --}}
{{-- Modify project default scripts, etc in the views/core folder --}}
{{-- Core assets are loaded before and overwritten by page assets --}}

{{-- The page's title --}}
@section('title')
Desktop style guide for StudioGood.com
@stop

{{-- Any page meta tags, such as page-specific og: or twitter: tags --}}
@section('page-tags')

@stop

{{-- Page-specific stylesheets --}}
@section('page-styles')
<link href="/css/slider.css" rel="stylesheet">
@stop

{{-- Renders after the layout header. Useful for page-specific, secondary navigation --}}
@section('page-header')

@stop

{{-- This section contains the main page content --}}
{{-- Templates for common sections are listed below --}}

@section('page-content')

{{-- For desktop --}}
<h1>Desktop style guide</h1>
<div class="line"></div>

{{-- Primary page heading --}}
<h2>Primary page heading</h2>
<section class="text-divider bg-cover pad-large">
	<div class="row primary-heading">
		<div class="medium-12 columns text-center">
			<div class="page-title">
				<h1 class="text-white">Title with <strong>emphasis</strong></h1>
				<div class="medium-4 line"></div>
				<div class="text-white"><em>Subhead goes here, on every heading</em></div>
			</div>
		</div>
	</div>
	<img alt="Slider Background" class="divider-bg" src="/img/background-jobs2.jpg" />
</section>

{{-- Page content section --}}
<h2>Page content section with no background</h2>
<section class="pad-large">
	<div class="row">
		<p>Chia iPhone yr street art, freegan narwhal lo-fi cliche stumptown before they sold out. Synth locavore ennui church-key Marfa meggings, 90's pop-up narwhal cornhole actually try-hard. Tousled hella disrupt VHS. Asymmetrical occupy Etsy ethnic 3 wolf moon. Irony salvia 8-bit, fashion axe Vice Neutra gentrify leggings cred disrupt post-ironic synth tofu. Drinking vinegar post-ironic skateboard selfies Pinterest authentic. Bespoke Godard dreamcatcher pop-up tofu, roof party street art XOXO Schlitz literally crucifix kitsch Thundercats craft beer.</p>
	</div>
</section>

{{-- Page content section with background --}}
<h2>Page content section with background</h2>
<section class="text-divider bg-cover pad-large">
	<div class="row">
		<p>Chia iPhone yr street art, freegan narwhal lo-fi cliche stumptown before they sold out. Synth locavore ennui church-key Marfa meggings, 90's pop-up narwhal cornhole actually try-hard. Tousled hella disrupt VHS. Asymmetrical occupy Etsy ethnic 3 wolf moon. Irony salvia 8-bit, fashion axe Vice Neutra gentrify leggings cred disrupt post-ironic synth tofu. Drinking vinegar post-ironic skateboard selfies Pinterest authentic. Bespoke Godard dreamcatcher pop-up tofu, roof party street art XOXO Schlitz literally crucifix kitsch Thundercats craft beer.</p>
	</div>
	<img alt="Slider Background" class="divider-bg" src="/img/background-jobs2.jpg" />
</section>

{{-- Page content section with parallax --}}
<h2>Page content section with parallax</h2>
<section class="text-divider bg-cover pad-large has-parallax">
	<div class="row">
		<p>Chia iPhone yr street art, freegan narwhal lo-fi cliche stumptown before they sold out. Synth locavore ennui church-key Marfa meggings, 90's pop-up narwhal cornhole actually try-hard. Tousled hella disrupt VHS. Asymmetrical occupy Etsy ethnic 3 wolf moon. Irony salvia 8-bit, fashion axe Vice Neutra gentrify leggings cred disrupt post-ironic synth tofu. Drinking vinegar post-ironic skateboard selfies Pinterest authentic. Bespoke Godard dreamcatcher pop-up tofu, roof party street art XOXO Schlitz literally crucifix kitsch Thundercats craft beer.</p>
	</div>
	<img alt="Slider Background" class="divider-bg" src="/img/background-jobs2.jpg" />
</section>

{{-- Service style tiles --}}
<h2>Service style tiles</h2>
<section class="pad-large">
	<div class="row">

		<div class="medium-4 columns offix">
			<div class="service">
				<div class="service-text">
					<div class="service-icon">
						<div class="icon icon-eye"></div>
					</div>
					<h1 class="job-title">Service tile title</h1>
					<h5>Service tile subhead</h5>
					<div class="line"></div>
					<p>
						Chia iPhone yr street art, freegan narwhal lo-fi cliche stumptown before they sold out. Synth locavore ennui church-key Marfa meggings, 90's pop-up narwhal cornhole actually try-hard.
					</p>
				</div>
				<div class="line"></div>
				<div class="btn">
					<h6 class="alt-h">Details</h6>
				</div>
			</div>
		</div>

		<div class="medium-4 columns offix">
			<div class="service">
				<div class="service-text">
					<div class="service-icon">
						<div class="icon icon-eye"></div>
					</div>
					<h1 class="job-title">Service tile title</h1>
					<h5>Service tile subhead</h5>
					<div class="line"></div>
					<p>
						Chia iPhone yr street art, freegan narwhal lo-fi cliche stumptown before they sold out. Synth locavore ennui church-key Marfa meggings, 90's pop-up narwhal cornhole actually try-hard.
					</p>
				</div>
				<div class="line"></div>
				<div class="btn">
					<h6 class="alt-h">Details</h6>
				</div>
			</div>
		</div>

		<div class="medium-4 columns offix">
			<div class="service">
				<div class="service-text">
					<div class="service-icon">
						<div class="icon icon-eye"></div>
					</div>
					<h1 class="job-title">Service tile title</h1>
					<h5>Service tile subhead</h5>
					<div class="line"></div>
					<p>
						Chia iPhone yr street art, freegan narwhal lo-fi cliche stumptown before they sold out. Synth locavore ennui church-key Marfa meggings, 90's pop-up narwhal cornhole actually try-hard.
					</p>
				</div>
				<div class="line"></div>
				<div class="btn">
					<h6 class="alt-h">Details</h6>
				</div>
			</div>
		</div>

	</div>
</section>

{{-- Slider type 1 --}}
<h2>Slider type 1</h2>
<section>
	<div class="row slider-controls">
		<div class="control active" data-target="slide-1">
		    <div class="btn">
		        <h6 class="alt-h">Slide 1</h6>
		    </div>
		</div>
		<div class="control" data-target="slide-2">
		    <div class="btn">
		        <h6 class="alt-h">Slide 2</h6>
		    </div>
		</div>
		<div class="control" data-target="slide-3">
		    <div class="btn">
		        <h6 class="alt-h">Slide 3</h6>
		    </div>
		</div>
	</div>

	<div class="row slider-slides">
		<div class="slide-wrapper">
			<div class="slide" id="slide-1">
				<p>Chia iPhone yr street art, freegan narwhal lo-fi cliche stumptown before they sold out. Synth locavore ennui church-key Marfa meggings, 90's pop-up narwhal cornhole actually try-hard. Tousled hella disrupt VHS. Asymmetrical occupy Etsy ethnic 3 wolf moon. Irony salvia 8-bit, fashion axe Vice Neutra gentrify leggings cred disrupt post-ironic synth tofu. Drinking vinegar post-ironic skateboard selfies Pinterest authentic. Bespoke Godard dreamcatcher pop-up tofu, roof party street art XOXO Schlitz literally crucifix kitsch Thundercats craft beer.</p>
			</div>
			<div class="slide" id="slide-2">
				<p>Chia iPhone yr street art, freegan narwhal lo-fi cliche stumptown before they sold out. Synth locavore ennui church-key Marfa meggings, 90's pop-up narwhal cornhole actually try-hard. Tousled hella disrupt VHS. Asymmetrical occupy Etsy ethnic 3 wolf moon. Irony salvia 8-bit, fashion axe Vice Neutra gentrify leggings cred disrupt post-ironic synth tofu. Drinking vinegar post-ironic skateboard selfies Pinterest authentic. Bespoke Godard dreamcatcher pop-up tofu, roof party street art XOXO Schlitz literally crucifix kitsch Thundercats craft beer.</p>
			</div>
			<div class="slide" id="slide-3">
				<p>Chia iPhone yr street art, freegan narwhal lo-fi cliche stumptown before they sold out. Synth locavore ennui church-key Marfa meggings, 90's pop-up narwhal cornhole actually try-hard. Tousled hella disrupt VHS. Asymmetrical occupy Etsy ethnic 3 wolf moon. Irony salvia 8-bit, fashion axe Vice Neutra gentrify leggings cred disrupt post-ironic synth tofu. Drinking vinegar post-ironic skateboard selfies Pinterest authentic. Bespoke Godard dreamcatcher pop-up tofu, roof party street art XOXO Schlitz literally crucifix kitsch Thundercats craft beer.</p>
			</div>
		</div>
	</div>
</section>

{{-- Slider type 2 --}}
<h2>Slider type 2</h2>


{{-- Flip-card grid --}}
<h2>Flip-card grid</h2>

{{-- Modal type 1 --}}
<h2>Modal type 1</h2>

{{-- Modal type 2 --}}
<h2>Modal type 2</h2>

{{-- Headings --}}
<h2>Headings</h2>

{{-- Buttons --}}
<h2>Buttons</h2>

@stop

@section('page-overlays')

@stop

@section('page-footer')

@stop

@section('page-scripts')

@stop