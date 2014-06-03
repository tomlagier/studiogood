//Debouncer from https://code.google.com/p/jquery-debounce/


$("#work-for-good").on('click', function() {
	$("#container").removeClass('casestudies');
	$("#hidden-container").addClass('casestudies');
});

$("#good-work").on('click', function() {
	$("#hidden-container").removeClass('casestudies');
	$("#container").addClass('casestudies');
});

$('h1#caseName').html(function(index, curHTML) {
   var text = curHTML.split(/[\s-]/),
       newtext = '<span class="blue">' + text.pop() + '</span>';
   return text.join(' ').concat(' ' + newtext);
});

$(".caseStudyList li").on('click', function() {
	$(this).addClass('active');
});

$("#next").on('click', function(e) {
	e.preventDefault();
	getNext();
});
$("#prev").on('click', function(e) {
	e.preventDefault();
	getPrev();
});

$('.filter').on('click', function(){
	if(!$(this).hasClass('active')){
		$('.filter').removeClass('active');
		$(this).addClass('active');
		sortFlipCards('work-for-good');
		setupFlipCards();

		var target = $(this).attr('id');

		setTimeout(function(){
			showText(target);
		}, 100);
	}
});

function showText(target)
{
	var el = $('#' + target + '-text');

	el.show();

	setTimeout(function(){
		el.addClass('fadeOut');
		setTimeout(function(){
			el.removeClass('fadeOut');
			el.hide();
		}, 2000);
	}, 1500);
}

function closeOverlay()
{
	$('.overlay').addClass('hidden');
	$('body').css('overflow', 'visible');

	setTimeout(function(){
		$('#overlay .overlay').remove();
	}, 300);
}

function setupWorkEvents()
{	
	$('.modal .close').on('click', function(e){
		e.preventDefault();
		closeOverlay();
	});

}

function setupGridItems()
{
	$('.grid-item').on('click', function(){
		setupModal($(this), 'curr');
	});
}

function setupFlipCards(){
	$('.card-container').hover(function(){
		var self = $(this);
		if(!self.hasClass('.flipped-lr'))
		{
			self.addClass('hover').flip();
		}
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

	$('#overlay').on('click', function(evt){
		if($(evt.target).closest('.noclose').length === 0)
		{
			closeOverlay();
		}
	});

	setupGridItems();
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

var moving = false;

function setupModal(target, direction)
{
	var overlay = $('<div class="overlay ' + direction + ' hidden"></div>'),
		modal = $('<div class="modal ' + direction + ' noclose"></div>'),
		navigation = $('<div class="navigation noclose"></div>');


	modal.html(target.find('.modal-content').html());
	navigation.html($('#overlay .controls').html());

	overlay.append(modal).append(navigation);
	overlay.css('background-image', 'url("' + target.attr('data-image') + '")');

	$('#overlay').append(overlay);

	overlay.addClass('transition');

	modal.css('margin-top', -(modal.height()/2));

	navigation.css('left', (($(window).width()/2) - 50) + 'px');
	navigation.css('top', (modal.height()/2) + modal.position().top + 30 + 'px');

	navigation.find('.next').on('click', function(){
		if(!moving)
		{
			var next = getNextItem(target);
			setupModal(next, 'next');
			transitionNextModal();
			moving = true;
			setTimeout(function(){
				moving = false;
			}, 700);
		}
	});

	navigation.find('.prev').on('click', function(){
		if(!moving)
		{
			var prev = getPrevItem(target);
			setupModal(prev, 'prev');
			transitionPrevModal();
			moving = true;
			setTimeout(function(){
				moving = false;
			}, 700);
		}
	});
	
	setTimeout(function(){
		overlay.removeClass('hidden');
	}, 0);

	$('body').css('overflow', 'hidden');

	setupWorkEvents();
}

function getNextItem(current)
{
	var items = $('.grid-item'), 
		currentIndex = items.index(current),
		nextIndex;

	nextIndex = currentIndex + 1;

	if(nextIndex === items.length)
	{
		return $(items.get(0));
	}

	return $(items.get(nextIndex));
}

function getPrevItem(current)
{
	var items = $('.grid-item'), 
		currentIndex = items.index(current),
		lastIndex;

	lastIndex = currentIndex - 1;

	if(lastIndex === -1)
	{
		return $(items.get(items.length - 1));
	}

	return $(items.get(lastIndex));
}

function transitionNextModal()
{
	$('.overlay.curr').css('left', '-100%').addClass('remove');
	setTimeout(function(){
		$('.remove').remove();
	}, 700);
	$('.overlay.next').css('left', '0').addClass('curr').removeClass('next').css('left', '');
}

function transitionPrevModal()
{
	$('.overlay.curr').css('left', '100%').addClass('remove');
	setTimeout(function(){
		$('.remove').remove();
	}, 700);
	$('.overlay.prev').css('left', '0').addClass('curr').removeClass('prev').css('left', '');
}

setupFlipCards();