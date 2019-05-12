
$(function() {
	var h = $(window).height();
	var isEnd = false;
	$('#fullpage').fullpage({
		//options here
		autoScrolling:true,
		navigation: true,
		scrollingSpeed: 1500,
		scrollHorizontally: true,

		afterLoad:function(origin, destination, direction){
			// console.log(origin.index)
			if (origin.index == 0) {
				$(".search").show().animate({"right":370},1500,function(){
					$(".src").animate({"opacity":1},500,function(){
						$(".search").hide();
						$(".search-02-1").show().animate({"height":25,"right":240,"bottom":450},500);
						$(".goods").show().animate({"height":218},500,function(){
							$(".words").animate({"opacity":0},500);
							$(".words02").animate({"opacity":1},500);
							isEnd = true;
						});
					});
				});
			}
		},
		onLeave:function(origin, destination, direction){
		 	if (origin.index == 1 && isEnd == true ) {
		 		$(".covs").show();
		 		$(".second-shird").show().animate({"bottom": - (h - 280),"height":166,"left":260},1200,function(){
		 			$(".img-01-a").animate({"opacity":1},500,function(){
		 				$(".btn-01-a").animate({"opacity":1},500);
		 			});
		 		});
		 	}
		 }
	});

	//methods
	$.fn.fullpage.setAllowScrolling(true);
	// $.fn.fullpage.afterLoad=function(origin, destination, direction){
	// 	alert(origin)
	// };
});
