(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$(".toggle-password").click(function() {

	  $(this).toggleClass("fa-eye fa-eye-slash");
	  var input = $($(this).attr("toggle"));
	  if (input.attr("type") == "password") {
	    input.attr("type", "text");
	  } else {
	    input.attr("type", "password");
	  }
	});

})(jQuery);



/*=============== LIGHT DARK THEME ===============*/
const themeButton = document.getElementById('theme-button')
const lightTheme = 'dark-mode'
const iconTheme = 'bxs-sun'



const zad = document.getElementById('zad')
if (localStorage.theme == null){
    localStorage.theme = "light"
}
else if (localStorage.theme == "dark"){
    zad.classList.toggle(lightTheme)
}

console.log(localStorage.theme)





themeButton.addEventListener('click', () => {
    // Add or remove the light / icon theme
    if (localStorage.theme == "light")
        localStorage.theme = "dark"
    else localStorage.theme = "light"
    zad.classList.toggle(lightTheme)
    themeButton.classList.toggle(iconTheme)
	console.log(localStorage.theme)
})
console.log(123)