<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="footer-widget span2">
				<h4>Pages</h4>
				<div class="clear"></div>
				<ul class="list">
					<li><a href="index.html">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Work</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Contact</a></li>
				</ul>			
			</div>
			
			<div class="footer-widget span3">
				<h4>Why Us</h4>
				<div class="clear"></div>
				
				<ul class="list">
					<li><a href="#">Easy to customize</a></li>
					<li><a href="#">User Friendly</a></li>
					<li><a href="#">Pixel Perfect</a></li>
					<li><a href="#">Clean and modern</a></li>
					<li><a href="#">Complete Pages</a></li>
					<li><a href="#">After Sales Service</a></li>
				</ul>			
			</div>
			
			<div class="footer-widget span3 flicker">
				<h4>Latest Flickr</h4>
				<div class="clear"></div>
				
				<div id="images" class="carousel">
					<ul>
					
					</ul>
				</div> 
	
			</div>
			
<div class="footer-widget span4 newsletter-widget">

		<form action="index.html" method="GET"  id="signup"  target="_blank" >

	 <label>NEWSLETTER SIGNUP
	 
	 </label>
	 <span id="response"></span>
	<p>Subscribing to our mailing list to receive the latest news from us.</p>
	<input type="email" value="" name="EMAIL" class="email" id="email_footer" placeholder="email address" required/>
	<input type="submit" value="Join" name="subscribe" id="submit" class="button">
</form>
<!-- AddThis Button BEGIN
<div class="share_this">
<span class='st_googleplus_hcount' displayText='Google +'></span>
<span class='st_twitter_hcount' displayText='Tweet'></span>
<span class='st_facebook_hcount' displayText='Facebook'></span>
</div> -->

</div>


</div>

				
</div>
			
			
	
</footer>


<section class="bottom-footer">
		 <div class="container footer-bottom">
		 	<div class="row">
				
				<div class="link-list span6">
					<a href="#">Terms of Services</a>
					<a href="#">Privacy Policy</a>
					<a href="#">FAQs</a>
					<a href="#">Customer services</a>
				</div>	
				
		
			
				<div class="span6 social-icons">
					<div class="alignright">
					<div class="iconbox">
					<a class="zocial icon facebook" href="#">Sign in with Facebook</a>
					<a class="zocial icon googleplus" href="#">Sign in with Google+</a>
					<a class="zocial icon twitter" href="#">Sign in with Twitter</a>
					<a class="zocial icon google" href="#">Sign in with Google</a>
					<a class="zocial icon linkedin" href="#">Sign in with LinkedIn</a>
					<a class="zocial icon paypal" href="#">Pay with Paypal</a>
					<a class="zocial icon amazon" href="#">Sign in with Amazon</a>
					<a class="zocial icon dropbox" href="#">Sync with Dropbox</a>
					</div>
					</div>
				</div>
			

				
			</div>
		 </div>
</section>
<div class="clear"></div>

	<div class="container">
		<div class="row">

	
	<p class="copywrite span12">
	&copy; 2013 DesignMonstr.com , All rights reserved.
	</p>
		</div>
	</div>



	<!-- all javascript -->
	{{ HTML::script('js/jquery-1.8.2.min.js') }}
	{{ HTML::script('js/jquery.tools.min.js') }}
	{{ HTML::script('js/jquery.easing.1.3.js') }}
	{{ HTML::script('js/sliders/jquery.carousel.js') }}
	{{ HTML::script('js/sliders/jquery.bxslider.js') }}
	{{ HTML::script('js/sliders/jquery.flexslider.js') }}
	{{ HTML::script('js/tinynav.js') }}
	{{ HTML::script('js/jquery.fancybox.pack.js') }}
	
	
	<!-- jQuery layerslider Slider  -->
	{{ HTML::script('js/sliders/layerslider/jQuery/jquery-transit-modified.js') }}
	{{ HTML::script('js/sliders/layerslider/js/layerslider.transitions.js') }}
	{{ HTML::script('js/sliders/layerslider/js/layerslider.kreaturamedia.jquery.js') }}
	{{ HTML::script('js/') }}		


	{{ HTML::script('js/superfish.js') }}
	{{ HTML::script('js/jquery.hoverdir.js') }}
	{{ HTML::script('js/demojs/colorpicker.js') }}
	{{ HTML::script('js/demojs/option.js') }}
	{{ HTML::script('js/custom.js') }}
	
	<!-- share this button -->
	{{ HTML::script('js/buttons.js') }}
	
	<!-- Page spalash script -->
	{{ HTML::script('js/jquery.queryloader2.min.js') }}
	{{ HTML::script('js/init.js') }}

	<!-- Page Scroll -->
	{{ HTML::script('js/smooth-scroll.js') }}

	<script type="text/javascript">
	jQuery(document).ready(function($) {
	"use strict";

	$(' #da-thumbs > li >div.wrapper>.main').each( function() { $(this).hoverdir(); } );
	
	$('.bxslider').bxSlider({
		pagerCustom: '#bx-pager',
		transition  : 'fade'
	});
	
	$.getJSON("http://api.flickr.com/services/feeds/groups_pool.gne?id=675729@N22&lang=en-us&format=json&jsoncallback=?", function(data){
	
   $.each(data.items, function(i,item){
	
    $("<img/>").attr("src", item.media.m).appendTo("#images>ul")
    .wrap("<li></li>").wrap("<a href='" + item.link + "'></a>");
	
    });
	
	
	$('#images').carousel({
		itemsPerPage: 3,
		itemsPerTransition: 3,
		easing: 'linear',
		noOfRows: 3,
		pagination: false
	});

});


});// end of document ready 


		$(document).ready(function(){
						$('#layerslider').layerSlider({
        				    autoStart : true,
        					skin : 'noskin',
                            skinsPath : '/css/sliders/layerslider/css/skins/',
                            animateFirstLayer : true,
                            navPrevNext : true,
        					responsiveUnder : 979,
        					sublayerContainer : 960,
                            pauseOnHover : false
        				});
			});		


	</script>
