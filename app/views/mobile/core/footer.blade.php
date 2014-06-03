<!-- Begin footer content -->
@yield('page-footer', '')

{{-- Generic footer goes here --}}
<a id="contact-form-link"></a>
<section id="contact" class="text-divider bg-cover pad-large" data-nav="contact">

	<img alt="Slider Background" class="divider-bg" src="/img/contact-background.jpg" />
	
	<div class="row divider-content">
		<div class="medium-8 medium-centered columns">
			<form id="contact-form" class="text-center">
				<h1 class="text-white">Drop us a line</h1>
				<div class="row form-body">
					<input id="form-name" type="text" placeholder="Name" />
					<input id="form-email" type="text" placeholder="Email" />
					<input id="form-msg" type="text" placeholder="Message" />
					<div class="text-right">
						<span id="details-error" class="text-white text-center">*Error: Please complete all fields correctly</span>
						<span id="form-sent" class="text-white text-center">Thank you, your message has been sent!</span>
						<div class="row">
							<div class="columns small-6"><div class="btn white-btn clear-btn"><h6 class="alt-h text-white">Clear</h6></div></div>
							<div class="columns small-6"><div id="form-btn" class="btn white-btn columns small-6"><h6 class="alt-h text-white">Send</h6></div></div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="row divider-content">
		<div class="medium-12 columns text-center">
			<span class="copy-text text-white alt-h">&copy; 2014 CauseMediaGroup LLC</span>
		</div>
	</div>

</section><!--end of contact section-->
<!-- End footer content -->

<!-- Begin footer scripts -->
@include('mobile.core.scripts')

<!-- Begin page-specific scripts -->
@yield('page-scripts', '')

<!-- End page-specific scripts -->
<!-- End footer scripts -->