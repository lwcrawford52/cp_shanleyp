<?php
/**
 * The template for the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package Shanley_Price
 */

get_header();
?>

	<main id="primary" class="site-main">

<div id="hero">
            <div class="hero-overlay">
			</div>	
				
			<div class="hero-text">
            <h1>It’s a Regulatory World.<br>
    <em>Be Advised.</em></h1>
    <p>Shanley Price, LLP offers comprehensive legal services to insurance carriers, self-insureds, and employers in workers’ compensation insurance defense matters throughout the state of Texas, and represents insurance guaranty funds and insureds in insurance insolvency, receivership, and guaranty association litigation and consulting matters throughout the country.</p>
    
				
			</div>
    
</div>

<div id="about" class="about-container">
    <h2>About Our Firm</h2>

    <div class="columns-3">
        <!-- todo: make this content dynamic -->
        <div class="column">
            <div class="column-title">
                <img src="<?php bloginfo('template_url'); ?>/assets/SP_AboutFirm_Dedication.svg" class="about-icon">
                <h3>Dedication</h3>
</div>
            <p class="column-text">At Shanley Price, we are dedicated to providing effective and efficient legal representation in all aspects of workers’ compensation insurance defense. Shanley Price offers over 40 years of combined legal experience in the area of insurance law. Both the firm and its partners are AV-rated “Preeminent” by the Martindale-Hubbell law directory, the highest rating available for excellence of legal counsel, coupled with the highest ethical practices.</p>
        </div>
        <div class="column">
            <div class="column-title">
            <img src="<?php bloginfo('template_url'); ?>/assets/SP_AboutFirm_Responsiveness.svg" class="about-icon">
                <h3>Responsiveness</h3>
                </div>
            <p class="column-text">Focused and responsive client service is at the heart of outstanding representation. Shanley Price offers the unparalleled experience and agility of a small firm, with the expertise and state-wide coverage of a large one. Our partners are directly involved in each matter on which they work. We are fully immersed and directly engaged in every case, which means we are more available, more responsive, and more directly accountable to our clients.
</p>
        </div>
        <div class="column">
            <div class="column-title">
            <img src="<?php bloginfo('template_url'); ?>/assets/SP_AboutFirm_Integrity.svg" class="about-icon">
                <h3>Integrity</h3>
                </div>
            <p class="column-text">Shanley Price is committed to principles of fairness and efficiency. We bring ingenuity, leadership, and best practices to every matter we handle, and stand ready to counsel our clients to help them achieve the most favorable outcome. Providing quality legal service with personal attention to every detail, our clients know they will receive focused attention, value, and expertise on each and every matter.</p>
        </div>
    </div>
</div>

<div class="welcome">
        <h3>Welcome to Shanley Price.</h3>
    </div>

<div id="attorneys">

    <!-- query for bios post type -->
		<?php query_posts('post_type=bios'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
    <div class="team-row">    

        <div class="team-bg">
            <div class="team-info">

            <?php if( get_field('bio_image') ): ?>
					<img src="<?php the_field('bio_image'); ?>" class="headshot">
					<?php endif; ?>
                
            <?php if( get_field('bio_contact') ): ?>
                <div><?php the_field('bio_contact'); ?></div>
                <?php endif; ?>
                
            </div>
        </div>


        <div class="team-content">
        <h3><?php the_title(); ?></h3>

            <?php if( have_rows('bio_accordion') ): ?>

            <div class="bio-accordion">

                <?php while( have_rows('bio_accordion') ): the_row(); ?>
                    
                    <button class="accordion"><?php the_sub_field('title'); ?><i class="fal fa-plus red"></i></button>
                    <div class="panel"><?php the_sub_field('panel_text'); ?></div>
                <?php endwhile; ?>
            
            </div>
            <?php endif; ?>

        </div>

    </div>

    <?php endwhile;
        endif;
		?>

</div>

<div id="practice-areas">
<h2>Practice Areas</h2>
<p>Shanley Price is an Austin-based law firm offering comprehensive legal services in the following practice areas:</p>
    <div class="columns-3">
            <!-- todo: make this content dynamic -->
            <div class="column">
                <ul>
                    <li>Workers’ Compensation Dispute Resolution</li>
                    <li>Claims Consulting </li>
                    <li>Workers’ Compensation Litigation</li>
                </ul>
            </div>
            <div class="column">
            <ul>
                    <li>Subrogation</li>
                    <li>Regulatory Compliance</li>
                    <li>Austin Board Representation Services</li>
                </ul>
            </div>
            <div class="column">
            <ul>
                    <li>Insurance Receivership & Guaranty Association Representation</li>
                    <li>Civil & Commercial Litigation</li>
                </ul>
            </div>
    </div>
</div>

<div id="cases">

    <div class="cases-inner">

    <?php query_posts('posts_per_page=1'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="cases-title">
            <h3><?php the_title(); ?></h3>
        </div>

        <div class="cases-text">
            <p><?php the_content(); ?></p>
        </div>

        <?php endwhile;
	endif;
	?>

    </div>

</div>

	

	</main><!-- #main -->

<?php
get_footer();
