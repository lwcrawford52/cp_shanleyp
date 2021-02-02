<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shanley_Price
 */

?>

	<footer id="colophon" class="site-footer">

	<div id="contact" class="contact">
		<div class="contact-inner">
			<div class="email-form">
			<a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/SP_Logo_White.svg" class="footer-logo"></a>
			<h4>Sign Up for Our Newsletter: <span class="tan">Comp <span class="arya">SP</span>eak</span></h4>

			<div class="form">
						<?php 
						gravity_form( 'Email Signup', false, false, false, '', true );
						?>
					</div>

			</div>

			<div class="contact-text">
			<nav id="social-nav" class="social">
				
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'social',
						'menu_id'        => 'social',
					)
				);
				?>
			</nav>
				<p><a href="mailto:info@sp-legal.com">info@sp-legal.com</a></p>
				<p>Phone: <a href="tel:5122658986">512.265.8986</a> <br>Toll Free: <a href="tel:8335230819">833.523.0819</a> <br>Fax: <a href="tel:5126756191">512.675.6191</a></p>
				<p>5501A Balcones Drive, Suite 218 <br>Austin, TX 78731</p>
				<p><img src="<?php bloginfo('template_url'); ?>/assets/SP_Footer_MH_2021.png" style="width:180px;"></a></p>
			</div>
</div>
</div>

		<div class="site-info">
			<p>© 2020 Shanley Price, LLP. ALL RIGHTS RESERVED. | Site by <a href="https://creativepickle.com/" target="_blank">CreativePickle</a></p>
			<p class="disclaimer">Disclaimer: Unless otherwise noted, attorneys in the firm are not certified by the Texas Board of Legal
Specialization. The material and information contained on this website is intended to provide general
information only, not legal advice. Legal advice must be tailored to the specific facts off each case,
and different jurisdictions have different laws and regulations. You should consult with an attorney
licensed to practice in your jurisdiction before relying upon any of the information presented on this
website. You are advised that sending e-mail to, viewing information from, or downloading information
from this website does not create an attorney-client relationship.</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- <script type="text/javascript" src="slick/slick.min.js"></script> -->

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
<script>
(function($) {
	
	$( ".gform_fields li.email .ginput_container" ).prepend( '<i class="fal fa-envelope-open-text"></i>' );
	  
  })( jQuery );
</script>

</body>
</html>
