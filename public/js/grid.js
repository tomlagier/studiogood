function setupFlipCards(){
	$('.card-container').hover(function(){
		var self = $(this)
		$(this).addClass('hover').flip();
		$("h2.frontName").hide();
	}, function(){
		$(this).removeClass('hover').flip();
		$("h2.frontName").show();
	});

	setInterval(function(){
		$.each($('.flipped-lr'), function(index, el){
			if(!$(el).hasClass('hover')){
				$(el).flip();
			}
		});
	}, 300);

	$('.grid-item').click(function(){
		$('#modal').html($(this).find('.modal-content').html());
		$('#overlay, #modal').addClass('show');
		if($('.profile-pic').length > 0)
		{
			$('#modal .profile-pic').height($('#modal .content').height());
		}
		$('#modal').css('margin-top', -($('#modal').height()/2));
	});

	$('#overlay').click(function(){
		$('#modal').css('top', '');
		$('#overlay, #modal').removeClass('show');
	});
}

function sortFlipCards()
{
	var elementsToAppend = $('#hidden-container').children();
	var elementsToRemove = $('#container').children();

	$('#container').children().addClass('hidden');

	setTimeout(function(){
		$('#container').empty();
		$('#container').append(elementsToAppend);

		$('#hidden-container').empty();
		$('#hidden-container').append(elementsToRemove);

		setTimeout(function(){
			$('#container').children().removeClass('hidden');
		}, 100);
	}, 700);
}

setupFlipCards();