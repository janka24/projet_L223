$(document).ready(function() {
	$('.nav-scroll').on('click', function() {

		var page = $(this).attr('data-target');

		if($('#myCarousel').length){
			var speed = 100;
			$('html, body').animate( { scrollTop: $(page).offset().top-100 }, speed ); // Go
			return false;
		}else{
			$.ajax({
				type:"get",
				url:"accueil.php",
			})

			.done(function(data){
				$('main').html(data);
			})

			$( document ).ajaxComplete(function() {
				var speed = 0;
				$('html, body').animate( { scrollTop: $(page).offset().top-100 }, speed ); // Go
				return false;
			});
		}
	});

	$("#espace-btn").click(function() {
		$.ajax({
			type:"get",
			url:"includes/espace/login.php",
		})

		.done(function(data){
			$('main').html(data);
		})
		$('html, body').animate( { scrollTop: $(body).offset().top-100 }, 100 );
	});

	$("#create-btn").click(function() {
		$.ajax({
			type:"get",
			url:"includes/espace/create.php",
		})

		.done(function(data){
			$('main').html(data);
		})
		$('html, body').animate( { scrollTop: $(body).offset().top-100 }, 100 );
	});
});
