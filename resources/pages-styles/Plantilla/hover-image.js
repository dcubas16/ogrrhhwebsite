$(function(){
	// lightbox image
	$(".lightbox-image").append("<span></span>");
	
	$(".lightbox-image").hover(function(){
		$(this).find("img").stop().animate({opacity:0.3}, "normal")
	}, function(){
		$(this).find("img").stop().animate({opacity:1}, "normal")
	});
});
$(function(){
	// lightbox image
	$(".lightbox-image1").append("<span></span>");
	
	$(".lightbox-image1").hover(function(){
		$(this).find("img").stop().animate({opacity:0.3}, "normal")
	}, function(){
		$(this).find("img").stop().animate({opacity:1}, "normal")
	});
});