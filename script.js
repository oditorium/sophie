$(document).ready(function(){
	//alert('document ready');
	if ("standalone" in window.navigator){
		
		// on Mobile Safari
		
		if (window.navigator.standalone){
			// in webapp mode
			//alert ("Your are in WEBAPP mode");
			$('body').css("margin", "0px");	
			$('a.internal').on('click', function(e){
				e.preventDefault();
				window.location.href=e.target.href+"&i=1"
			})
		}
		else {
			// not in webapp mode
			//alert ("Your are in NORMAL mode");
		}
	}
	else {
		
		// NOT on Mobile Safari	
		//alert ("Your are on not on Mobile Safari");
	}
	
	//http://www.bennadel.com/blog/1950-detecting-iphone-s-app-mode-full-screen-mode-for-web-applications.htm

})