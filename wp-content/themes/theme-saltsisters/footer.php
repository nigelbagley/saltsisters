<footer>
  <div class="container">
    <p>&copy; Salt Sisters <?php echo date('Y'); ?></p>
  </div>
</footer>
<script>
	$(window).scroll(function() {
	// 100 = The point you would like to fade the nav in.
	  
		if ($(window).scrollTop() > 50 ){
	    
	 		$('.bg').addClass('show');
	    
	  } else {
	    
	    $('.bg').removeClass('show');
	    
	 	};   	
	});

	$('.scroll').on('click', function(e){		
			e.preventDefault()
	    
	  $('html, body').animate({
	      scrollTop : $(this.hash).offset().top
	    }, 1500);
	});

</script>
<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>