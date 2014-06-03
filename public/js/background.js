var locations = {
	'slo' : 
	{
		'image' : '/img/contact-background.jpg',
		'address1' : '1880 Santa Barbara Ave, Ste 260',
		'address2' : 'San Luis Obispo, CA 93401',
		'phone' : '123 123 1234',
		'mapLink' : 'http://maps.google.com'
	},
	'dal' : 
	{
		'image' : '/img/something.jpg',
		'address1' : '800 Jackson St, Ste 400',
		'address2' : 'Dallas, TX 75202',
		'phone' : '123 123 1234',
		'mapLink' : 'http://maps.google.com'
	},
	'atl' :
	{
		'image' : '/img/something.jpg',
		'address1' : 'Somewhere',
		'address2' : 'Atlanta, GA',
		'phone' : '123 123 1234',
		'mapLink' : 'http://maps.google.com'
	},
	'nyc' :
	{
		'image' : '/img/something.jpg',
		'address1': '70 East 55th St, 4th Floor',
		'address2': 'New York City, NY 10022',
		'phone' : '123 123 1234',
		'mapLink' : 'http://maps.google.com'
	}
}

$('document').ready(function(){
	$('.location-section').on('click', function(){
		var self = $(this);
		var target = self.attr('id');
		$('#contact').css('background-image', 'url(' + locations[target].image + ')');
		$('.location-section').removeClass('active');
		self.addClass('active');
		$('.contact-method').css('opacity', '0');
		setTimeout(function(){
			$('#contact-map .line-1').text(locations[target].address1);
			$('#contact-map .line-2').text(locations[target].address2);
			$('#contact-map a').attr('href', locations[target].mapLink);
			$('#contact-phone .number').text(locations[target].phone);
			$('.contact-method').css('opacity', '1');
		}, 400);
	});

	setTimeout(function(){
		$('#saturation-overlay').css('top', $('#contact-form-link').offset().top);
		$('#saturation-overlay').height($('#contact').outerHeight());
	}, 200);
});

$(window).resize(function(){
	$('#saturation-overlay').css('top', $('#contact-form-link').offset().top);
	$('#saturation-overlay').height($('#contact').outerHeight());
});