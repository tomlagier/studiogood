@extends('desktop.layouts.main')

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
<link type="text/css" href="/css/slider.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="/css/grid.css?{{time();}}">	
<link type="text/css" rel="stylesheet" href="/css/flipcard.css?{{time();}}}}">
@stop

{{-- Renders after the layout header. Useful for page-specific, secondary navigation --}}
@section('page-header')

@stop

{{-- This section contains the main page content --}}
{{-- Templates for common sections are listed below --}}

@section('page-content')

{{-- For desktop --}}
<h1 class="text-center pad-large">Desktop style guide</h1>
<div class="line"></div>

{{-- Primary page heading --}}
<h2 class="text-center">Primary page heading</h2>
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
<h2 class="text-center">Page content section with no background</h2>
<section class="pad-large">
	<div class="row">
		<p>Chia iPhone yr street art, freegan narwhal lo-fi cliche stumptown before they sold out. Synth locavore ennui church-key Marfa meggings, 90's pop-up narwhal cornhole actually try-hard. Tousled hella disrupt VHS. Asymmetrical occupy Etsy ethnic 3 wolf moon. Irony salvia 8-bit, fashion axe Vice Neutra gentrify leggings cred disrupt post-ironic synth tofu. Drinking vinegar post-ironic skateboard selfies Pinterest authentic. Bespoke Godard dreamcatcher pop-up tofu, roof party street art XOXO Schlitz literally crucifix kitsch Thundercats craft beer.</p>
	</div>
</section>

{{-- Page content section with background --}}
<h2 class="text-center">Page content section with background</h2>
<section class="text-divider bg-cover pad-large">
	<div class="row">
		<p>Chia iPhone yr street art, freegan narwhal lo-fi cliche stumptown before they sold out. Synth locavore ennui church-key Marfa meggings, 90's pop-up narwhal cornhole actually try-hard. Tousled hella disrupt VHS. Asymmetrical occupy Etsy ethnic 3 wolf moon. Irony salvia 8-bit, fashion axe Vice Neutra gentrify leggings cred disrupt post-ironic synth tofu. Drinking vinegar post-ironic skateboard selfies Pinterest authentic. Bespoke Godard dreamcatcher pop-up tofu, roof party street art XOXO Schlitz literally crucifix kitsch Thundercats craft beer.</p>
	</div>
	<img alt="Slider Background" class="divider-bg" src="/img/background-jobs2.jpg" />
</section>

{{-- Page content section with parallax --}}
<h2 class="text-center">Page content section with parallax</h2>
<section class="text-divider bg-cover pad-large has-parallax">
	<div class="row">
		<p>Chia iPhone yr street art, freegan narwhal lo-fi cliche stumptown before they sold out. Synth locavore ennui church-key Marfa meggings, 90's pop-up narwhal cornhole actually try-hard. Tousled hella disrupt VHS. Asymmetrical occupy Etsy ethnic 3 wolf moon. Irony salvia 8-bit, fashion axe Vice Neutra gentrify leggings cred disrupt post-ironic synth tofu. Drinking vinegar post-ironic skateboard selfies Pinterest authentic. Bespoke Godard dreamcatcher pop-up tofu, roof party street art XOXO Schlitz literally crucifix kitsch Thundercats craft beer.</p>
	</div>
	<img alt="Slider Background" class="divider-bg" src="/img/background-jobs2.jpg" />
</section>

{{-- Service style tiles --}}
<h2 class="text-center">Service style tiles</h2>
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
<h2 class="text-center">Slider type 1</h2>
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
<h2 class="text-center">Slider type 2</h2>
<section class="slider-centered">
	<div>
		<ul class="slides">
			<li class="has-parallax cover-bg">
				<div class="row slide-content content-box bottom left">
					<h2>Slide 1</h2>
					<p>Some sample content for the first slider slide. This can be as short as a snappy tagline or as long as a few sentences. Just like this.</p>
					<div><a href="/work" class="btn"><h6 class="alt-h">See All</h6></a></div>
				</div>
				<img alt="Slider Background" class="slider-bg" src="http://24.media.tumblr.com/9648c31b022042b513da6eb496fdc33d/tumblr_myp9mb1QNJ1st5lhmo1_1280.jpg" />
			</li><!--end of individual slide-->
			
			<li class="has-parallax cover-bg">
				<div class="row slide-content content-box bottom right">
					<h2>Slide 2</h2>
					<p>A much shorter content tagline.</p>
					<div><a href="/work" class="btn"><h6 class="alt-h">See All</h6></a></div>
				</div>
				<img alt="Slider Background" class="slider-bg" src="http://37.media.tumblr.com/e615708905cc9df81f901c06ae4afe1e/tumblr_n21ltnVLtz1st5lhmo1_1280.jpg" />
			</li><!--end of individual slide-->
			
			<li class="has-parallax cover-bg">
				<div class="row slide-content content-box top right">
					<h2>Slide 3</h2>
					<p>This one is sort of medium sized. A little longer than the last one, shorter than the first.</p>
					<div><a href="/work" class="btn"><h6 class="alt-h">See All</h6></a></div>
				</div>
				<img alt="Slider Background" class="slider-bg" src="http://31.media.tumblr.com/099300b2f98941e43b443f1370400f45/tumblr_mve3jil0l81st5lhmo1_1280.jpg" />
			</li><!--end of individual slide-->
		</ul>
	</div>
</section>

{{-- Flip-card grid --}}
<h2 class="text-center">Flip-card grid</h2>
<section class="pad-large">
	<div class="row portfolio-entries">
		<ul class="large-block-grid-4 medium-block-grid-2 small-block-grid-1 grid-container">
			
			<li class="grid-item card-container">
				<div class="grid-item-inner card">
					<div class="front">
						<div class="inner">
							<p>Card front content</p>
						</div>
					</div>
					<div class="back">
						<div class="inner text-center">
							<p>Card back content</p>
						</div>
					</div>
				</div>
			</li>

			<li class="grid-item card-container">
				<div class="grid-item-inner card">
					<div class="front">
						<div class="inner">
							<p>Card front content</p>
						</div>
					</div>
					<div class="back">
						<div class="inner text-center">
							<p>Card back content</p>
						</div>
					</div>
				</div>
			</li>

			<li class="grid-item card-container">
				<div class="grid-item-inner card">
					<div class="front">
						<div class="inner">
							<p>Card front content</p>
						</div>
					</div>
					<div class="back">
						<div class="inner text-center">
							<p>Card back content</p>
						</div>
					</div>
				</div>
			</li>

			<li class="grid-item card-container">
				<div class="grid-item-inner card">
					<div class="front">
						<div class="inner">
							<p>Card front content</p>
						</div>
					</div>
					<div class="back">
						<div class="inner text-center">
							<p>Card back content</p>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</section>

{{-- Headings --}}
<h2 class="text-center">Headings</h2>
<div class="row">
	<h1>Heading 1</h1>
	<h2>Heading 2</h2>
	<h3>Heading 3</h3>
	<h4>Heading 4</h4>
	<h5>Heading 5</h5>
	<h6>Heading 6</h6>
</div>

{{-- Buttons --}}
<h2 class="text-center">Buttons</h2>
<div class="row">
	<div class="text-center">
		<a href="#" class="btn">Click me</a>
	</div>
</div>
@stop

{{-- Use this section for page-specific overlays --}}
@section('page-overlays')

@stop

{{-- This content will be rendered after the generic page footer. Useful for page-specific navigation in the footer --}}
@section('page-footer')

@stop

{{-- Use this section to include page-specific scripts that will be included in the footer, after general site scripts --}}
@section('page-scripts')
<script src="/js/slider.js"></script>
<script src="/js/flipcard.js"></script>
<script src="/js/grid.js"></script>
@stop