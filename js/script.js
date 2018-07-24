$(window).ready(function () {
	/* делаем плавное появление текста */
	$(".offer__note").children().hide();
	$(".offer__note").children().animate({
		opacity: "show"
	}, 800);

	//$(".button").hover(function () {
	//$(this).animate(
	//	backgroundColor: "#0CF", 500);
	//})

	//$(window).scroll(function(){
	//if()
	// alert("Вы прокрутили содержимое hello-screen.");
	// });

	$(".navbar__link").hover(function () {
		$(this).animate({
			color: "#ff5158"
		}, 200);
	})
	$(".navbar__link").mouseout(function () {
		$(this).animate({
			color: "#fff"
		}, 100);
	})
});
