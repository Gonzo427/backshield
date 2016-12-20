<?php /* Template Name: Home Page  */ ?>
<?php get_header(); ?>
<section  class="row" id="content" role="main">
	
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<section class="entry-content color-wrapper">
		<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>

		<div class="video-bg" ><div class="grid"><div class="c12"><?php the_field('video_background'); ?></div></div>
		
		<div class="home_section" data-background-color="#D6E5E3" id="part_1"><div class="grid"><div class="c12"><?php the_field('home_section_1'); ?></div></div></div>
		<div class="home_section" data-background-color="#DCD6F7" id="part_2"><div class="grid"><div class="c12"><?php the_field('home_section_2'); ?></div></div></div>
		<div class="home_section" data-background-color="#A6B1E1" id="part_3"><div class="grid"><div class="c12"><?php the_field('home_section_3'); ?></div></div></div>
		<div class="entry-links"><div class="grid"><div class="c12"><?php wp_link_pages(); ?></div></div></div>
		</section>
		</article>
		
		<?php endwhile; endif; ?>
		</div> <!--end c12-->

</section>
<?php get_footer(); ?>