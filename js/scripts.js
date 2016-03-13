$(function(){

	console.log("It's working");

	$(window).on('scroll', function() {

		var currentPosition = $(this).scrollTop();
		$('section').each(function() {
			var target = $(this).offset().top;
			var id = $(this).attr('id');

			target -= 500;

			if (currentPosition >= target) {
				$('.sectionTitle h2').text(id);
			}
		});
		

	});


});

// windowscroll listen for the offset of specific elements
// listen for when about div comes into view - change h2
// jquery.offset