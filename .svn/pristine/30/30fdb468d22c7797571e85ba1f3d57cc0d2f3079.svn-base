$(document).ready(function() {
	$("#overlay .close").on("click", function(e) {
		e.preventDefault();
		hideModal();
	});

	$('h1#employeeName, .caption .name').html(function(index, curHTML) {
	   var text = curHTML.split(/[\s-]/),
	       newtext = '<span class="blue">' + text.pop() + '</span>';
	   return text.join(' ').concat(' ' + newtext);
	});


	setupGridClick();

	$('#overlay').on('click', function(){
		hideModal();
	});
});

function setupGridClick()
{
	$('.grid-item').on('click', function(){
		if(!$('#modal').hasClass('show'))
		{
			showModal($(this));
		}
	});
}

function showModal(target)
{
	$('#modal').html(target.find('.modal-content').html());

	$('#content').attr('data-open-modal', target.attr('id'));

	var bodyHeight = $('#modal .profile-pic').height() + $('#modal .content').height() - $('#people-heading').height() - $('#contact').height();
	$('#overlay, #modal').addClass('show');
	$('#content').height(bodyHeight).css('overflow', 'hidden');
	$('#modal').append($('#overlay .close'));
	$(window).scrollTop(0);
}

function hideModal()
{
	$('#content').css({
		'height' : '',
		'overflow' : 'visible'
	});
	$('#overlay').append($('#modal .close'));
	$('#overlay, #modal').removeClass('show');

	$(window).scrollTop($('#' + $('#content').attr('data-open-modal')).offset().top - 85);
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

