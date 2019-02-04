/* inicio de logo escondido */
$(window).scroll(function() {
	if ($("#logo").offset().top > 100) {
		$("#logo").addClass("d-xl-block");
	} else {
		$("#logo").removeClass("d-xl-block");
	}
});
/* fin de logo escondido */