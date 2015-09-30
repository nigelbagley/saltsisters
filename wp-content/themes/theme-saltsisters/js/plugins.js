//load in jQuery plugin dependencies (eg. flexslider, smoothScroll etc.) in this file
(function($){
	$(window).load(function() {
	  $('.flexslider').flexslider({
	    animation: "slide"
	  });
	});
})(jQuery);

jQuery(document).ready(function($)
				{
					
					$("#accordions-41.accordions").accordion({
						collapsible: true,
						heightStyle: "content",
						animated: "swing",
						active: "",changestart: function(event, ui) {
							child.accordion("activate", false); 
						}
					});
					
					var child = $(".child-accordion").accordion({
						active:true,heightStyle: "content",
						collapsible: true,
						animated: "swing",

					});
				})