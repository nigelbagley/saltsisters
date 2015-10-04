<footer>
  <div class="container">
	  <div class="footer-container">
	  		<div class="footer-copy">		
		    	<p>&copy; Salt Sisters <?php echo date('Y'); ?></p>
		    	<p><a href="http://salt-sisters.com/Salt_Sisters_Terms_and_Conditions.pdf" target="_blank">Terms & Conditions</a></p>
		    	<p><a href="http://salt-sisters.com/?page_id=22">Contact Us</a></p>
	    	</div>
	    	<div class="footer-social">
	    		<a href="https://www.facebook.com/saltsisterskite" target="_blank"><i class="fa fa-facebook-official fa-2x"></i></a>
	    		<a href="https://instagram.com/saltsisterskite/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
	    		<a href="https://twitter.com/saltsisterskite" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>
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
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68363697-1', 'auto');
  ga('send', 'pageview');

</script>
<?php wp_footer(); ?>


<script src="http://salt-sisters.com/wp-content/themes/theme-saltsisters/jquery.flexslider.js"></script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js'></script>
</body>
</html>