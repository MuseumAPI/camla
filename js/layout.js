(function($) {

	jQuery.fn.toggleFold = function() {

		var thisFold = $(this).parents('.accordionfold');

		if ( thisFold.hasClass('activefold') ) {
			// Close
			thisFold.removeClass('activefold');
			thisFold.find('.target').stop().slideUp("fast");
		} else {
			// Open
			thisFold.addClass('activefold');
			thisFold.find('.target').stop().slideDown("fast");
		}

	}

	$(document).ready(function() {

		$('html').addClass('js');

		$('.accordionfold .trigger').on("click", function(event) {
			event.preventDefault();
			$(this).toggleFold();
		});

	});

})(jQuery);
