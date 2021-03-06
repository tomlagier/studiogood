$.prototype.fullScreenBackground = function() {

	var player = $(this),
		section = $('#home-video'),
		windowWidth = $(window).width(), 
 		windowHeight = $(window).height(), 
 		videoWidth = 0, 
 		videoHeight = 0,
 		offset = {};

 	//Constrain by height
 	if(windowWidth * .562 < windowHeight)
 	{
 		videoWidth = windowHeight * 1.7793;
 		videoHeight = windowHeight;
 		offset = {
 					'margin-top'  : '0',
 					'margin-left' : -(videoWidth/2),
 					'top'		  : '0',
 					'left'		  : '50%'
 	 			 };
 	}
 	//Constrain by width
 	else
 	{
 		videoWidth = windowWidth;
 		videoHeight = windowWidth * .562;
 		offset = {
 					'margin-top' : -(videoHeight/2),
 					'margin-left': '0',
 					'top'		 : '50%',
 					'left'		 : '0'
 				 };

 	}

 	//Apply CSS
 	player
 		.width(videoWidth)
 		.height(videoHeight)
 		.css(offset);

 	section.height(windowHeight - $('#header').height());

}


//Set up player
 var homeVideoPlayer = videojs('home-video-player');

 homeVideoPlayer.ready(function(){

 	homeVideoPlayer.controls(false);

 	$('#home-video-player').fullScreenBackground();

 	//Mute volume
 	homeVideoPlayer.volume(0);

 	homeVideoPlayer.play();

 	//Loop
 	homeVideoPlayer.on('ended', function(){

 		homeVideoPlayer.play();

 	});

 });

 $(window).on('resize', function(){

 	$('#home-video-player').fullScreenBackground();

 });