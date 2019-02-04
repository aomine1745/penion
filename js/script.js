/* inicio de cambiar color navbar */
$(window).scroll(function() {
	if ($("#navbar").offset().top > 100) {
		$("#navbar").addClass("bg-azul");
	} else {
		$("#navbar").removeClass("bg-azul");
	}
});
/* fin de cambiar color navbar */

/* inicio de flecha arriba */
$(document).ready(function(){
	$('.flecha').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});
	$(window).scroll(function(){
		if ($(this).scrollTop() > 0 ) {
			$('.flecha').slideDown(300);
		}else{
			$('.flecha').slideUp(300);
		}
	});	
});
/* fin de flecha arriba */