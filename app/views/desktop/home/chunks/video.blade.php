<section id="home-video" data-nav="home">
	
	{{-- Background video --}}
	
	<div id="home-video-wrapper">
		<video id="home-video-player" class="video-js vjs-default-skin"
		  controls preload="auto"
		  poster="/img/home-poster.jpg"
		  data-setup=''>
		 {{-- IMPORTANT: Need to edit nginx headers to respond to video formats properly --}}
		 <source src="/video/home-video-placeholder.mp4" type='video/mp4' />
		 <source src="/video/home-video-placeholder.webm" type='video/webm' />
		 <source src="/video/home-video-placeholder.ogv" type='video/ogg' />
		</video>
	</div>

	{{-- Text overlay --}}
	
	<div class="row text-center" id="video-overlay">
		<div class="medium-12 medium-centered columns">
			<div class="home-title offix">
					<p class="text-white"><em>we believe</em></p>
				<h1 class="headline">Good Ideas</h1>
					<p class="text-white"><em>can change attitudes and actions</em></p>
			</div>
		</div>
	</div>

</section>