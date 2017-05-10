$(window).scroll(function () {
	var sc = $(window).scrollTop()
	if (sc > 350) {
		$("#main-navbar").addClass("navbar-scroll")
	} 
	else {
		$("#main-navbar").removeClass("navbar-scroll")
	}
});