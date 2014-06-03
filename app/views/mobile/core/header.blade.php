<!-- Begin header content -->
@yield('page-header', '')

{{-- Primary navigation --}}

<div id="navigation">
	<div id="header-logo">
		@if($page === 'home')
			<a class="smooth-scroll headline-logo" id="home-logo" href="#home-scroll"></a>
		@else
			<a class="smooth-scroll headline-logo" id="home-logo" href="/"><!-- <img alt="logo" src="/img/logo.png" /> --></a>
		@endif
	</div>
</div>

<div id="mobile-navigation">
	<div id="mobile-tab"><i class="icon icon_menu-square_alt2"></i></div>
	<div id="mobile-menu">
		<ul class="menu">
			<li><a class="main {{($page === "people" ? "active" : '')}}" href="/people">People</a></li>
			<li><a class="main {{($page === "work" ? "active" : '')}}" href="/work">Work</a></li>
			<li><a class="main {{($page === "jobs" ? "active" : '')}}" href="/jobs">Jobs</a></li>
			<!-- <li><a class="main" href="http://blog.studiogood.com">Blog</a></li> -->
		</ul>
	</div>
</div>

{{-- Social tabs --}}
{{-- Removed for mobile --}}

<div id="preload-social-images"></div>

<!-- End header content -->