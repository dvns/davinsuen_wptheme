$(function(){

	console.log("It's working");

	$(window).on('scroll', function() {

		var currentPosition = $(this).scrollTop();
		$('section').each(function() {
			var target = $(this).offset().top;
			var id = $(this).attr('id');

			target -= 500;

			if (currentPosition >= target) {
				$('.mainNav li').removeClass('active');
				$('.mainNav li a[href=#' + id + ']').parent().addClass('active');

				if(id !== 'home') {
					$('.sectionTitle h2').text(id);
				}
				else {
					$('.sectionTitle h2').empty();
				}
			};
		});
	});
});