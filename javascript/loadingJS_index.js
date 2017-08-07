$(document).ready(function(){
	var storage=sessionStorage;
	if(storage["entryCount"]==null){
		var news = $('.loadScroll ul'),
			fadeInSpeed = 1000,
			timer,speed = 2500;

		function newScroll(){
			var lastli=news.find('li:last');
				lastli.clone().hide().prependTo(news).fadeIn(fadeInSpeed,function(){
				// timer = setInterval(newScroll,speed);
			});
				lastli.remove();
		}
		timer = setInterval(newScroll,speed);


		$('#loading').delay(5000).fadeOut();
	}
	$('#loading').fadeOut(0);
	storage.setItem("entryCount",1);
});