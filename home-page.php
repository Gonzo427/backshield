<?php /* Template Name: Home Page  */ ?>
<?php get_header(); ?>
	
			
<section  class="row" id="content" role="main">
	
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
			
	
		
		</article>
		<section class="entry-content">
		
		<!--<section id="big-video"> 
   			 <div class="video" data-src="[FALLBACK IMAGE URL]" data-video="http://www.backshield.tiffanysevareid.com/wp-content/themes/backshield/videos/rearview_driving_mounts_1080p.mp4" data-placeholder="[PLACEHOLDER IMAGE URL]"></div>
		</section>-->

		<!--<div class="video-bg" ><?php //the_field('video_background'); ?></div>-->
		<div class="cta">
					<div class="orange-triangle animated fadeInLeft">
						<span><h1><strong>Pain Free<srong> Driving</h1>
					    <p>By Design</p>
					    <p>BackShield is a back-support breakthrough: a patented, computer-aided design combined with next-generation materials to deliver hour after hour of comfort behind the wheel. </p>
						</span>
					</div>
				
					 <div class="blue-triangle animated  fadeInDown"></div>
		</div><!--/cta-->
				
		<div class="slide-wrap">
			<div id="slide-1" class="slide animated" data-img-src="wp-content/themes/backshield/images/vert-slide-1.jpg">
				
			</div><!-- /slide -->
		
			<div id="slide-2" class="slide animated" data-img-src="wp-content/themes/backshield/images/vert-slide-2.jpg"></div>
			<div id="slide-3" class="slide animated" data-img-src="wp-content/themes/backshield/images/vert-slide-3.jpg"></div>
			<div id="slide-4" class="slide animated" data-img-src="wp-content/themes/backshield/images/vert-slide-4.jpg"></div>
		</div><!-- /slide-wrap-->
	
		<div class="entry-links"><div class="grid"><div class="c12"><?php wp_link_pages(); ?></div></div></div>
		</section>
		
		<?php endwhile; endif; ?>
		</div>

</section>
<?php get_footer(); ?>