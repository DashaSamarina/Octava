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
});
