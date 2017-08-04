// $(function(){
// 	//parallax(xPosition, speedFactor, outerHeight)設定選項
// 	//xPosition 水平位置
// 	//speedFactor滾動速度
// 	$('.matches').parallax("50%",0.1,1);
// 	$('#parallax_cloud1').parallax("50%",0.1,1);
// 	$('#parallax_cloud2').parallax("50%",0.2,1);
// 	$('#parallax_cloud3').parallax("50%",0.3,1);
// });

$(document).ready(function(){

	$(".matches").on('mousemove',function(e){
		var w = $(window).width();
		var h = $(window).height();
		var offsetX = 0.5 - e.pageX /w;
		var offsetY = 0.5 - e.pageY / h;
		$(".parallax").each(function(i,el){
			var offset = parseInt($(el).data("offset"));
			var translate ="translate3d("+Math.round(offsetX*offset)+"px,"+Math.round(offsetY*offset)+"px,0px)";
			// console.log($(el));
			$(el).css({
							'-webkit-transform':translate,
							'transform':translate,
							'moz-transform':translate
						});
		});
	});

	$(".entryButton").hover(function(){
		$(this).css({animationPlayState: "paused"});
	},function(){
		$(this).css({animationPlayState: "running"});
	});

	$(".logoBack").click(function(){
		var a =$(this).children('img').attr("src");
		// console.log(a.match("night"),a.match("sun"));
		if(a.match("night") != null){
			$(".matches").css("backgroundImage","linear-gradient(to bottom, #473657, #3195e8)");
			$(this).children('img').attr("src","images/matches/sun.png");
		}else{
			$(".matches").css("backgroundImage","linear-gradient(to bottom, #2caeff, #69ffb7)");
			$(this).children('img').attr("src","images/matches/night.png");
		}
	});


});
