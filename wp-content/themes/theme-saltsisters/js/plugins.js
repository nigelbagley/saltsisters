//load in jQuery plugin dependencies (eg. flexslider, smoothScroll etc.) in this file
(function($){
	$(window).load(function() {
	  $('.flexslider').flexslider({
	    animation: "slide",
		slideshowSpeed: 28500,
	    animationSpeed: 1000
	  });
	});
})(jQuery);

jQuery(document).ready(function(jQuery)
				{
					
					jQuery("#accordions-41.accordions").accordion({
						collapsible: true,
						heightStyle: "content",
						animated: "swing",
						active: "",changestart: function(event, ui) {
							child.accordion("activate", false); 
						}
					});
					
					var child = jQuery(".child-accordion").accordion({
						active:true,heightStyle: "content",
						collapsible: true,
						animated: "swing",

					});
				})

jQuery(document).ready(function(jQuery)
			{
				
				jQuery("#accordions-97.accordions").accordion({
					collapsible: true,
					heightStyle: "content",
					animated: "swing",
					active: "",changestart: function(event, ui) {
						child.accordion("activate", false); 
					}
				});
				
				var child = jQuery(".child-accordion").accordion({
					active:true,heightStyle: "content",
					collapsible: true,
					animated: "swing",

				});
			})
$(function(){
 $('.mobile').click(function (){
  if (!$('ul.menu').is(':visible'))
  $('ul.menu').show();
  else  
  $('ul.menu').hide();
 })
});