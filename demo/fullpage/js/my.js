<<<<<<< HEAD
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
=======
// window.onload =function(){
// 	new fullpage('#fullpage', {
>>>>>>> 773ad22e8481fce1e1c54b04824f25acc5667865
// 		//options here
// 		autoScrolling:true,
// 		navigation:true,
// 		scrollHorizontally: true,
// 		afterLoad:function(origin){
// 			alert(origin.index)
// 		}
// 	});

// 	//methods
// 	fullpage_api.setAllowScrolling(false);
// }


$(function() {

	$('#fullpage').fullpage({
		//options here
		autoScrolling:true,
		navigation: true,
		scrollHorizontally: true,

		onLeave:function(origin, destination, direction){
			// console.log(origin.index)
			if (origin.index == 0) {
				$(".search").show().animate({"right":370},1500,function(){
					$(".src").animate({"opacity":1},500,function(){
						$(".search").hide();
						$(".search-02-1").show().animate({"height":25,"right":240,"bottom":450},500);
						$(".goods").show().animate({"height":218},500,function(){
							$(".words").animate({"opacity":0},500);
							$(".words02").animate({"opacity":1},500);
						});
					});
				});
			}
			// if (origin.index == 1) {
			// 	alert("dddddddddddd")
			// }

		}
	});

	//methods
	$.fn.fullpage.setAllowScrolling(true);
	// $.fn.fullpage.afterLoad=function(origin, destination, direction){
	// 	alert(origin)
	// };
});
