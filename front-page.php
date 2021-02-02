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

<div id="hero" class="fadein" style="<?php if( get_field('hero_image') ): ?>
    background-image: url(<?php the_field('hero_image'); ?>);
	<?php endif; ?>
	">
            <div class="hero-overlay">
			</div>	
				
			<div class="hero-text translate-y">
            <h1><?php the_field('hero_title'); ?></h1>
    <p><?php the_field('hero_text'); ?></p>
				
            </div>
            
            <div class="line">
                
</div>
            
</div>

<div id="about" class="about-container">
    <h2><?php the_field('about_title'); ?></h2>

    <div class="columns-3">
        
        <div class="column">
            <div class="column-title">
                <img src="<?php bloginfo('template_url'); ?>/assets/SP_AboutFirm_Dedication.svg" class="about-icon">
                <h3><?php the_field('first_column_title'); ?></h3>
</div>
            <p class="column-text"><?php the_field('first_column_text'); ?></p>
        </div>
        <div class="column">
            <div class="column-title">
            <img src="<?php bloginfo('template_url'); ?>/assets/SP_AboutFirm_Responsiveness.svg" class="about-icon">
                <h3><?php the_field('second_column_title'); ?></h3>
                </div>
            <p class="column-text"><?php the_field('second_column_text'); ?>
</p>
        </div>
        <div class="column">
            <div class="column-title">
            <img src="<?php bloginfo('template_url'); ?>/assets/SP_AboutFirm_Integrity.svg" class="about-icon">
                <h3><?php the_field('third_column_title'); ?></h3>
                </div>
            <p class="column-text"><?php the_field('third_column_text'); ?></p>
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
                    
                    <button class="accordion"><?php the_sub_field('title'); ?><i class="rotate fal fa-plus red"></i></button>
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

<div class="white-box"></div>

<div class="areas-slider">
<?php query_posts('category_name=practice-areas'); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
        <div class="slider-item">
                <p class="practice-icon"><img src="<?php the_field('practice_icon'); ?>"></p>
                <p class="icon-tan"><img src="<?php the_field('secondary_icon'); ?>"></p>
                <h4 class="area-title"><?php the_title(); ?></h4>
                    
        </div>
   
            
            <?php endwhile;
        endif;
        ?>
    </div>

</div>

<div id="cases">
                
    <div class="cases-inner">
    <?php query_posts('category_name=practice-areas'); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
                <div>
                    <h3 class="cases-title"><?php the_title(); ?></h3>
                    <div class="cases-text">
                    <p><?php the_content(); ?></p>
                    </div>
                </div>
            
            <?php endwhile;
        endif;
        ?>
     </div>
    

</div>

	

	</main><!-- #main -->

<?php
get_footer();
