$(function () {

	$('.open-search').click(function (e) {
		e.preventDefault();
		$('#search').addClass('active');
	});

	$('.close-search').click(function () {
		$('#search').removeClass('active');
	});

	$(window).on("scroll", function () {
		if ($(window).scrollTop() > 200) {
			$("#top").fadeIn();
		} else {
			$("#top").fadeOut();
		}
	});

	$("#top").click(function () {
		$("html").animate({ scrollTop: 0 }, 10)
	});

});
$(function () {
	$('.addtocart').on('submit', function () {
		let form = $(this);
		$.ajax({
			url: form.attr('action'),
			data: form.serialize(),
			type: 'post',
			success: function (result) {
				console.log(result);
			},
			error: function (msg) {
				alert('Error!');
				console.log(msg.responseJSON);
				form[0].reset();
			}
		});
		return false;
	});
});
