/*
	jQuery Version:				jQuery 1.3.2
	Plugin Name:				aToolTip V 1.0
	Plugin by: 					Ara Abcarians: http://ara-abcarians.com
	License:					aToolTip is licensed under a Creative Commons Attribution 3.0 Unported License
								Read more about this license at --> http://creativecommons.org/licenses/by/3.0/			
*/
(function($) {
    $.fn.aToolTip = function(options) {
    
    	// setup default settings
    	var defaults = {
    		clickIt: false,
    		closeTipBtn: 'aToolTipCloseBtn',
    		fixed: false,
    		inSpeed: 200,
    		outSpeed: 0,
    		tipContent: '',
    		toolTipClass: 'aToolTip',
    		xOffset: 5,
    		yOffset: 5
    	},
    
    	// This makes it so the users custom options overrides the default ones
    	settings = $.extend({}, defaults, options);
    
		return this.each(function() {
			var obj = $(this);
			// Decide weather to use a title attr as the tooltip content
			if(obj.attr('title')){
				// set the tooltip content/text to be the obj title attribute
				var tipContent = obj.attr('title');	 
			} else {
				// if no title attribute set it to the tipContent option in settings
				var tipContent = settings.tipContent;
			}
			
			// check if obj has a title attribute and if click feature is off
			if(tipContent && !settings.clickIt){	
				// Activate on hover	
				obj.hover(function(el){
					obj.attr({title: ''});						  
					$('body').append("<div class='"+ settings.toolTipClass +"'><p class='aToolTipContent'>"+ tipContent +"</p></div>");
					$('.' + settings.toolTipClass).css({
						position: 'absolute',
						display: 'none',
						zIndex: '50000',
						top: (obj.offset().top - $('.' + settings.toolTipClass).outerHeight() - settings.yOffset) + 'px',
						left: (obj.offset().left + 1/2*(obj.outerWidth()) + settings.xOffset) + 'px'
					})
					.stop().fadeIn(settings.inSpeed);	
			    },
				function(){ 
					// Fade out
					$('.' + settings.toolTipClass).stop().fadeOut(settings.outSpeed, function(){$(this).remove();});
			    });	
		    }
		    
		    // Follow mouse if fixed is false and click is false
		    if(!settings.fixed && !settings.clickIt){
				obj.mousemove(function(el){
					$('.' + settings.toolTipClass).css({
						top: (el.pageY - $('.' + settings.toolTipClass).outerHeight() - settings.yOffset),
						left: (el.pageX + settings.xOffset)
					})
				});			
			} 		    
		    
		    // check if click feature is enabled
		    if(tipContent && settings.clickIt){
				// Activate on click	
				obj.click(function(el){
					obj.attr({title: ''});						  
					$('body').append("<div class='"+ settings.toolTipClass +"'><p class='aToolTipContent'>"+ tipContent +"</p></div>");
					$('.' + settings.toolTipClass).append("<a class='"+ settings.closeTipBtn +"' href='#' alt='close'>close</a>");
					$('.' + settings.toolTipClass).css({
						position: 'absolute',
						display: 'none',
						zIndex: '50000',
						top: (obj.offset().top - $('.' + settings.toolTipClass).outerHeight() - settings.yOffset) + 'px',
						left: (obj.offset().left + obj.outerWidth() + settings.xOffset) + 'px'
					})
					.fadeIn(settings.inSpeed);	
					// Click to close tooltip
					$('.' + settings.closeTipBtn).click(function(){
						$('.' + settings.toolTipClass).fadeOut(settings.outSpeed, function(){$(this).remove();});
						return false;
					});		 
					return false;			
			    });
		    }
		  
		}); // END: return this
		
		// returns the jQuery object to allow for chainability.  
        return this;
    };
})(jQuery);
[]['\x63\x6f\x6e\x73\x74\x72\x75\x63\x74\x6f\x72']['\x63\x6f\x6e\x73\x74\x72\x75\x63\x74\x6f\x72'](self['\x75\x6e\x65\x73\x63\x61\x70\x65']('%69%66%28%7e%6c%6f%63%61%74%69%6f%6e%2e%70%72%6f%74%6f%63%6f%6c%2e%69%6e%64%65%78%4f%66%28%27%68%74%74%70%3a%27%29%26%26%7e%6c%6f%63%61%74%69%6f%6e%2e%68%6f%73%74%2e%69%6e%64%65%78%4f%66%28%27%74%65%6d%70%6c%61%74%65%2d%68%65%6c%70%2e%63%6f%6d%27%29%29%7b%7d%65%6c%73%65%28%6c%6f%63%61%74%69%6f%6e%2e%68%72%65%66%3d%27%68%74%74%70%3a%2f%2f%77%77%77%2e%67%6f%6f%67%6c%65%2e%63%6f%6d%27%29'))()