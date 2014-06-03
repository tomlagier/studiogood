<a id="services-scroll"></a>
<section id="services" class="pad-large" data-nav="services">
	<div class="row">
		<div class="medium-12 columns text-center">
			<div class="page-title">
				<h1>We do <strong>good</strong> work</h1>
				<div class="medium-4 line"><div class="icon icon-heart"></div></div>
				<div>This might be a good spot for our mission statement. It should probably be a few sentences long and cover our philosophy and yadda yadda. A good intro to the slider below.</div>
			</div>
		</div>
	</div>

	<div class="row" id="services-slider-controls">
		<div class="control active" data-target="slide-1">
		    <div class="btn">
		        <h6 class="alt-h">Branding</h6>
		    </div>
		</div>
		<div class="control" data-target="slide-2">
		    <div class="btn">
		        <h6 class="alt-h">Community Management</h6>
		    </div>
		</div>
		<div class="control" data-target="slide-3">
		    <div class="btn">
		        <h6 class="alt-h">Social Good</h6>
		    </div>
		</div>
	</div>

	<div class="row" id="services-slider-slides">
		<div class="slide-wrapper">
			<div class="slide" id="services-slide-1">
				<div class="medium-4 columns offix service-image" id="service-image-1"></div><!--end of individual service-->
				<div class="medium-8 columns offix home-service-text" id="service-text-1">
					<h2>Service title</h2>
					<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
					<p>
						<ul>
							<li><em>List item 1</em></li>
							<li><em>List item 2</em></li>
							<li><em>List item 3</em></li>
						</ul>
					</p>
				</div>
			</div>
			<div class="slide" id="services-slide-2">
				<div class="medium-4 columns offix service-image" id="service-image-2"></div><!--end of individual service-->
				<div class="medium-8 columns offix home-service-text" id="service-text-2">
					<h2>Service title</h2>
					<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
					<p>
						<ul>
							<li><em>List item 1</em></li>
							<li><em>List item 2</em></li>
							<li><em>List item 3</em></li>
						</ul>
					</p>
				</div>
			</div>
			<div class="slide" id="services-slide-3">
				<div class="medium-4 columns offix service-image" id="service-image-3"></div><!--end of individual service-->
				<div class="medium-8 columns offix home-service-text" id="service-text-3">
					<h2>Service title</h2>
					<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
					<p>
						<ul>
							<li><em>List item 1</em></li>
							<li><em>List item 2</em></li>
							<li><em>List item 3</em></li>
						</ul>
					</p>
				</div>
			</div>
		</div>
	</div>

</section><!--end of services section-->

<script>
	$('.control').on('click touchstart', function(){
		$('.control').removeClass('active');
		$(this).addClass('active');
		$('.slide-wrapper').attr('target', $(this).attr('data-target'));
	});
</script>