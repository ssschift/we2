

/************************************************/
/* Changes the background after 10 seconds to another picture (just on home)*/




/*********** Scans files ***/

/*Resizes the background accordingly to the browser size */




/*function imgSize (){
	
	// get dimensions of the image
	var imgWidth = $("#background_img").width();
	var imgHeight = $("#background_img").height();
	
	
	// get the dimensions of the browser 
    var browserWidth  = $(window).width();
    var browserHeight = $(window).height();
	
	
	// get sure that the images are not distorted
	var newImgHeight = browserWidth/1.5;
	var newImgWidth = browserHeight*1.5;
	
	// changes the image height to the browser height, width is 1.5 of the height
	$("#background_img").css("height", browserHeight);
	$("#background_img").css("width", newImgWidth);
	
	// if there is still some white space at the right side, add the difference and submit again. 
	if (browserWidth > newImgWidth) {
		var subs = browserWidth - newImgWidth;
		browserHeight += subs;
		newImgWidth += subs;}
	
		$("#background_img").css("height", browserHeight);
		$("#background_img").css("width", newImgWidth);
		$("#background_img").css("top", Math.round((browserHeight - imgHeight) / 2) + 'px');
		$("#background_img").css("left", "50%");	
};



$(document).ready(imgSize);


$(window).resize(imgSize);
*/	








/***********************************************************/
/* Chooses a random picture out of a library to show the visitor  */


	
	


	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
/******** Change opacity of background image***
$("#showPic").click(function() {
	$("#background_img").css("opacity", 1);
	});

*/

		/*if (browserWidth > browserHeight) {
		$("#background_img").css("height", newImgHeight);
		}
	
	else if (browserWidth < browserHeight) {
		$("#background_img").css("height", newImgWidth);
		};
	*/	
	
	
	
		/*
		if (imgHeight < browserHeight){
			$("#background_img").css("height", browserHeight);
			$("#background_img").css("width", newImgWidth);
			}
			
		else if (imgWidth < browserWidth){
			$("#background_img").css("width", browserWidth);
			$("#background_img").css("width", newImgHeight);
			}
	
		else if (imgHeight > browserHeight){
		$("#background_img").css("height", browserHeight);
		$("#background_img").css("width", newImgWidth);
			}
		
		else if (imgWidth > browserWidth){
		$("#background_img").style.width= browserWidth;
		$("#background_img").css("width", newImgHeight);
			}
			
		else {
			$("#background_img").style.height = height;
			$("#background_img").style.width = width;}
	*/			

