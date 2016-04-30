<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<style>
.social-button-container {
    clear: both;
    overflow: hidden;
    margin: 0 auto;
    width: 50%
}
.social-fb, .social-twitter, .social-gplus, .social-linkedin {margin: 7px 0;text-align:left;}
</style>
<div class="social-button-container">

	<!-- Facebook -->
	<div class="social-fb"></div>
<div class="fb-share-button" data-href="<?php the_permalink();?>" data-layout="icon"></div>
	<div class="social-twitter"></div>

	<!-- Google Plus -->
	<div class="social-gplus"></div>

	<!-- LinkedIN -->
	<div class="social-linkedin"></div>

</div>
