<!-- Begin header content -->
@yield('page-header', '')

{{-- Primary navigation --}}

<div id="navigation">
	<div id="nav-row" class="row">
		<div id="header-logo">
			@if($page === 'home')
				<a class="smooth-scroll headline-logo" id="home-logo" href="#home-scroll"><img alt="logo" src="/img/logo.png" /></a>
			@else
				<a class="smooth-scroll headline-logo" id="home-logo" href="/"><img alt="logo" src="/img/logo.png" /></a>
			@endif
		</div>
		<div class="text-center" id="main-menu">
			<ul class="menu">
				<li><a class="smooth-scroll {{($page === "people" ? "active" : '')}}" href="/people">People</a></li>
				<li><a class="smooth-scroll {{($page === "work" ? "active" : '')}}" href="/work">Work</a></li>
				<li><a class="smooth-scroll {{($page === "jobs" ? "active" : '')}}" href="/jobs">Jobs</a></li>
				<!-- <li><a class="smooth-scroll" href="http://blog.studiogood.com">Blog</a></li> -->
				<li><a class="smooth-scroll" href="#contact-form-link">Contact</a></li>
			</ul>
		</div>
	</div>
</div>

{{-- Social tabs --}}

<div id="preload-social-images"></div>

<div id="social-nav">
	<div class="sidebar-tabs">
		<div id="twitter-tab" class="sidebar-tab" data-target="#twitter-slide"></div>
		<div id="facebook-tab" class="sidebar-tab" data-target="#facebook-slide"></div>
		<div id="instagram-tab" class="sidebar-tab" data-target="#instagram-slide"></div>
		<a id="overheard-tab" class="sidebar-tab icon icon-dialogue-think" href="/overheards" alt="Overheard at StudioGood"></a>
	</div>
	<div class="sidebars">
		<div class="sidebar-slide">
			<div class="offset-block"></div>
			<div class="inner"></div>
		</div>
	</div>
</div>

<div id="hidden-slides">
	<div id="facebook-slide">
		<div class="social-button"><a class="btn" href="https://www.facebook.com/StudioGood/" target="_blank"><h4>Check us out on Facebook!</h4></a></div>
		<div class="loading-gif"></div>
	</div>
	<div id="instagram-slide">
		<div class="social-button"><a class="btn" href="http://instagram.com/studio_good" target="_blank"><h4>Check us out on Instagram!</h4></a></div>
		<div class="loading-gif"></div>
	</div>
	<div id="twitter-slide">
		<div class="social-button"><a class="btn" href="https://twitter.com/studiogood" target="_blank"><h4>Check us out on Twitter!</h4></a></div>
		<div class="loading-gif"></div>
	</div>
</div>

<!-- End header content -->