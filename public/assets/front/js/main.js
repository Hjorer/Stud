$(function() {

	$('.open-search').click(function(e) {
		e.preventDefault();
		$('#search').addClass('active');
	});

	$('.close-search').click(function() {
		$('#search').removeClass('active');
	});

	$(window).on("scroll", function() {
		if ($(window).scrollTop() > 200) {
			$("#top").fadeIn();
		} else {
			$("#top").fadeOut();
		}
	});
	
	$("#top").click(function(){
		$("html").animate({scrollTop:0}, 10)
	});

});