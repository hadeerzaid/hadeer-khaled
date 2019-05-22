$(document).ready(function(){
			$('.carousel').carousel({
			interval: 500,
			pause:null});
		/*scroll*/
	
		$(window).scroll(function(){
			
			if($(this).scrollTop()>=300){
				$("#a1").fadeIn("1000");
			}else{
				$("#a1").fadeOut("1000");	
			}
			
		});
		
		$("#a1").click(function(){
			$("html, body").animate({
				scrollTop:0 //Native Js
			},1000);
		});
	/*..scroll*/
		//mixItUp
var containerEl = document.querySelector('.container');

            var mixer = mixitup(containerEl);
			
//CountUp
var options = {
useEasing: true, 
useGrouping: true, 
separator: ',', 
decimal: '.', 
};
var demo = new CountUp('myTargetElement', 0, 1000, 0, 3, options);
if (!demo.error) {
	demo.start();
} else {
console.error(demo.error);
}



//WOW
new WOW().init();	



			
});
	






/*load page*/
$(window).on("load",function(){
	
	$("#loading").fadeOut(3000);
	
	$("#myImg").remove();
	
});
/*..load page*/

