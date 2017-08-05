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
	if($(window).width()>767){
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
	}

	$(".dateChange").click(function(){
		var a =$(this).siblings("input");
		// console.log(a.prop("checked"));
		if(a.prop("checked") != true){
			$(".matches").css("backgroundImage","linear-gradient(to bottom, #473657, #3195e8)");
			$(".star").fadeIn("slow");
			$(".toy").fadeOut(0);
		}else{
			$(".matches").css("backgroundImage","linear-gradient(to bottom, #2caeff, #69ffb7)");
			$(".toy").fadeIn("slow");
			$(".star").fadeOut(0);
		}
	});


});
