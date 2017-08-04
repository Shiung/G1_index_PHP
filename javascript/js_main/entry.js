$(document).ready(function(){
	$(".entryButton").click(function(){
		// console.log($(this).data('check'));
		if($(this).data('check') == "1"){
			location.replace("Matches_index.php");
		}else{
			location.replace("Matches_back/backHome.php");
		}
	});
});