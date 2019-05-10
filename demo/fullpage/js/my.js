window.onload =function(){
	new fullpage('#fullpage', {
		//options here
		autoScrolling:true,
		navigation:true,
		dragAndMove: true,
		scrollHorizontally: true
	});

	//methods
	fullpage_api.setAllowScrolling(false);
}


// $(document).ready(function() {

// 	$('#fullpage').fullpage({
// 		//options here
// 		autoScrolling:true,
// 		navigation: true,
// 		scrollHorizontally: true
// 	});

// 	//methods
// 	$.fn.fullpage.setAllowScrolling(false);
// });
