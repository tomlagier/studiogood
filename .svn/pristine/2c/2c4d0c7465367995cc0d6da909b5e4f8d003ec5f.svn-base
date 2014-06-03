
function sizeOffsetBlock()
{
	var possOffset = $('#navigation').offset().top - $(window).scrollTop()
	var offset = $('#navigation').height() + ( possOffset > 0 ? possOffset : 0);
	$('.offset-block').height(offset);
	$('.sidebar-slide .inner').height($(window).height() - offset - 10);
}

$(document).ready(function()
{
	sizeOffsetBlock();
});

$(window).scroll(function(){
	sizeOffsetBlock();
});

$(window).resize(function(){
	sizeOffsetBlock();
});

// @foreach($fbFeed->data as $feedItem)
// 	<div class="fb-entry">
// 		<?php 
// 			$itemId = explode('_', $feedItem->id);
// 			$itemId = $itemId[1];
// 		?>
// 		<a href="https://www.facebook.com/StudioGood/posts/{{$itemId}}" target="_blank">
// 			@if(isset($feedItem->picture))
// 				<img class="fb-image" src="{{$feedItem->picture}}" />
// 			@endif
// 			@if(isset($feedItem->message))
// 				<div class="fb-message">{{$feedItem->message}}</div>
// 			@endif
// 		</a>
// 	</div>
// 	<div class="fb-divider"></div>
// @endforeach

function getFacebook()
{

	var html = $('#facebook-slide'), entry, link, image, message, itemId, divider, wrapper;
	$.ajax(
		'/social/facebook',
		{
			success: function(response)
			{
				response = JSON.parse(response);
				response = response.data;

				html.find('.loading-gif').remove();

				response.forEach(function(post)
				{
					if(typeof post.picture !== "undefined" && typeof post.message !== "undefined")
					{

						entry = $('<div class="social-entry"></div>');

						itemId = post.id.split('_');
						itemId = itemId[1];
						
						link = $('<a href="https://www.facebook.com/StudioGood/posts/' + itemId + '" target="_blank"></a>');

						if(typeof post.picture !== "undefined")
						{
							image = $('<img class="social-image" src="' + post.picture + '" />');
						} 
						else
						{
							image = '';
						}

						if(typeof post.message !== "undefined")
						{
							message = $('<div class="social-message"></div>');
							message.text(post.message);
						}
						else
						{
							message = '';
						}

						link.append(image).append(message);

						entry.append(link);

						divider = $('<div class="divider"></div>');
						wrapper = $('<div class="social-wrapper"></div>');

						wrapper.append(entry).append(divider);

						html.append(wrapper);
					}

				});

				if($('#facebook-tab').hasClass('active'))
				{
					$('.sidebar-slide .inner').html($('#facebook-slide').html());
				}

			},
			error: function(response)
			{
				console.log(response);
			}
		}
	);
}

function getTwitter()
{
	var html = $('#twitter-slide'), entry, link, image, user, message, itemId, divider, wrapper;
	$.ajax(
		'/social/twitter',
		{
			success: function(response)
			{
				response = JSON.parse(response);

				html.find('.loading-gif').remove();

				response.forEach(function(tweet){
					entry = $('<div class="social-entry speech-bubble-left"></div>');
					link = $('<a href="http://twitter.com/' + tweet.user.screen_name + '/status/' + tweet.id_str + '" target="_blank"></a>');
					if(typeof tweet.entities !== "undefined" && typeof tweet.entities.media !== "undefined" && tweet.entities.media.length > 0)
					{
						image = $('<img class="social-image" src="' + tweet.entities.media[0].media_url_https + '" />');
					}
					else
					{
						image = $('<img class="social-image" src="/img/logo-placeholder.png" />');	
					}
					message = $('<div class="social-message"></div>');
					message.text(tweet.text);

					divider = $('<div class="divider"></div>');

					link.append(image).append(message);

					entry.append(link);

					wrapper = $('<div class="social-wrapper"></div>');

					wrapper.append(entry).append(divider);

					html.append(wrapper);
					
				});

				if($('#twitter-tab').hasClass('active'))
				{
					$('.sidebar-slide .inner').html($('#twitter-slide').html());
				}
			},
			error: function(response)
			{
				console.log(response);
			}
		}
	);
}

function getInstagram()
{
	var html = $('#instagram-slide'), entry, link, image, user, message, itemId, divider, wrapper;

	$.ajax(
		'/social/instagram',
		{
			success: function(response)
			{
				response = JSON.parse(response);
				response = response.data;

				html.find('.loading-gif').remove();

				response.forEach(function(gram){
					entry = $('<div class="social-entry"></div>');
					link = $('<a href="'+ gram.link +'" target="_blank"></a>');
					image = $('<div class="social-image" style="background: url(' + gram.images.thumbnail.url + ') no-repeat 50% 50%;"></div>');

					message = $('<div class="social-message"></div>');
					message.text(gram.caption.text);

					divider = $('<div class="divider"></div>');

					link.append(image).append(message);

					entry.append(link);

					wrapper = $('<div class="social-wrapper"></div>');

					wrapper.append(entry).append(divider);

					html.append(wrapper);
					
				});

				if($('#instagram-tab').hasClass('active'))
				{
					$('.sidebar-slide .inner').html($('#instagram-slide').html());
				}
			},
			error: function(response)
			{
				console.log(response);
			}
		}
	);
}

$(document).ready(function(){
	getFacebook();
	getTwitter();
	getInstagram();
});

$('.sidebar-tab:not("#overheard-tab")').on('click', function(evt){
    
    $('#social-nav').addClass('open');
    $('.sidebar-tab').removeClass('active');

    $(this).addClass('active');

    var target = $($(this).attr('data-target'));

    $('.sidebar-slide .inner').addClass('fade');

    setTimeout(function(){
    	$('.sidebar-slide .inner').html(target.html());
    	$('.sidebar-slide .inner').scrollTop(0);
    	$('.sidebar-slide .inner').removeClass('fade');
    }, 300);
    
});

$('html').on('click', function(evt){
    if($('#social-nav').hasClass('open'))
    {
        if($(evt.target).closest('#social-nav').length === 0)
        {
            $('#social-nav').removeClass('open');
            $('.sidebar-tab').removeClass('active');
        }
    }
});