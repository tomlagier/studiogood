$(document).ready(function() {
	$("a.close").on("click", function(e) {
		e.preventDefault();
		$("#overlay").click();
	});

	$('h1#employeeName').html(function(index, curHTML) {
       var text = curHTML.split(/[\s-]/),
           newtext = '<span class="blue">' + text.pop() + '</span>';
       return text.join(' ').concat(' ' + newtext);
     });
});

$(window).resize(function(){
	$('#modal .profile-pic').height($('#modal .content').height());
});

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

	$('.grid-item').on('click', function(){
		$('#modal').html($(this).find('.modal-content').html());
		$('#overlay, #modal').addClass('show');
		$('#modal .profile-pic').height($('#modal .content').height());
		$('#modal').css('margin-top', -($('#modal').height()/2));

		$('body').css('overflow', 'hidden');
	});

	$('#overlay').on('click', function(){
		$('#modal').css('top', '');
		$('body').css('overflow', 'visible');
		$('#overlay, #modal').removeClass('show');
	});
}

setInterval(function(){
	switchTitle();
}, 5500);

function switchTitle()
{
	$('.employee-title .normal').toggleClass('hidden');
	$('.employee-title .silly').toggleClass('hidden');
}

setupFlipCards();