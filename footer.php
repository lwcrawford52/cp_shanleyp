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

	<div class="contact">
		<div class="contact-inner">
			<div class="email-form">
			<a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/SP_Logo_White.svg" class="footer-logo"></a>
			<h4>Sign Up for Our Newsletter: <span class="tan">Comp <span class="arya">SP</span>eak</span></h4>
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
				<p>info@sp-legal.com</p>
				<p>Phone: 512.265.8986 <br>Toll Free: 833.523.0819 <br>Fax: 512.675.6191</p>
				<p>5501A Balcones Drive, Suite 218 <br>Austin, TX 78731</p>
			</div>
</div>
</div>

		<div class="site-info">
			<p>© 2020 Shanley Price, LLP. ALL RIGHTS RESERVED. | Disclaimers | Privacy Policy | Site by CreativePickle</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

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
</body>
</html>
