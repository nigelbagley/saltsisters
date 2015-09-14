<footer>
  <div class="container">
	  <div class="footer-container flex">
	  		<div class="footer-copy">		
		    	<p>&copy; Salt Sisters <?php echo date('Y'); ?></p>
		    	<p><a href="#">Terms & Conditions</a></p>
		    	<p><a href="#">Privacy Policy</a></p>
		    	<p><a href="#">Contact Us</a></p>
	    	</div>
	    	<div class="footer-social">
	    		<a href="#"><i class="fa fa-facebook-official fa-2x"></i></a>
	    		<a href="#"><i class="fa fa-instagram fa-2x"></i></a>
	    		<a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
	    		<a href="#"><i class="fa fa-pinterest-square fa-2x"></i></a>
	    	</div>
	   </div>
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