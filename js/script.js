$(window).ready(function () {
	/* делаем плавное появление */
	$(".offer__note").children().hide();
	$(".offer__note").children().animate({opacity: "show"}, 800);
});
