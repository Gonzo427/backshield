<?php /* Template Name: Home Page  */ ?>
<?php get_header(); ?>
	
			
<section   id="content" role="main">
	
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	
		</article>
		<section class="entry-content">
		
		<!--<section id="big-video"> 
   			 <div class="video" data-src="[FALLBACK IMAGE URL]" data-video="http://www.backshield.tiffanysevareid.com/wp-content/themes/backshield/videos/rearview_driving_mounts_1080p.mp4" data-placeholder="[PLACEHOLDER IMAGE URL]"></div>
		</section>-->

		<!--<div class="video-bg" ><?php //the_field('video_background'); ?></div>-->
			


			<div class="content">
				<div class="cta" data-top="opacity:1;" data-top-bottom="opacity:0;">
					
					 <div class="blue-triangle animated fadeInDown"></div>
				</div><!--/cta-->
			    <div class="orange-triangle animated fadeInLeft"></div>
			   
			    <div class="slide-1">
			    	<div class="intro animated fadeInLeft"  data-bottom="position:fixed;" data-center-bottom="position:absolute;">
				    	<h1><strong>Pain Free</strong> Driving</h1>
						<h2>By Design</h2>
						<p>BackShield is a back-support breakthrough: a patented, computer-aided design combined with next-generation materials to deliver hour after hour of comfort behind the wheel. </p>
					</div>
			    </div>
			    <div class="slide-2">
					<div class="intro" data-top="position:fixed;" data-100-top="position:absolute;">
				    	<h1><strong>Pain Free</strong> Driving</h1>
						<h2>By Design</h2>
						<p>BackShield is a donec sed placerat enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ultrices sed nisi quis dignissim.  </p>
					</div>
			    </div>
			    <div class="slide-3">
			    	<div class="intro">
				    	<h1><strong>Pain Free</strong> Driving</h1>
						<h2>By Design</h2>
						<p>BackShield is a lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id nisi nisi.</p>
					</div>
			    </div>
			    <div class="slide-4">
			    	<div class="intro">
				    	<h1><strong>Pain Free</strong> Driving</h1>
						<h2>By Design</h2>
						<p>BackShield is a praesent mollis dui nisi, vel aliquet odio iaculis mollis. Cras iaculis hendrerit tellus, vitae ultrices velit semper quis. </p>
					</div>
			    </div>

			    <div class="slide-1-bg" data-0="opacity:1;" data-100p="opacity:0;"></div>
				<div class="slide-2-bg" data-100p="opacity:1;" data-200p="opacity:0;"></div>
				<div class="slide-3-bg" data-200p="opacity:1;" data-300p="opacity:0;"></div>
				<div class="slide-4-bg" data-300p="opacity:1;" data-400p="opacity:0;"></div>


			</div>
				
		<!--<div class="slide-wrap slide">
			<div id="slide-1" class=" animated" data-img-src="wp-content/themes/backshield/images/vert-slide-1.jpg">
				<img class="animated" src="<?php //echo THEME_IMG_PATH; ?>/vert-slide-1.jpg">
			
		
			<div id="slide-2" class=" animated " data-img-src="wp-content/themes/backshield/images/vert-slide-2.jpg">
				<img class="animated slideInUp"  src="<?php //echo THEME_IMG_PATH; ?>/vert-slide-2.jpg">
			</div>
			<div id="slide-3" class=" animated" data-img-src="wp-content/themes/backshield/images/vert-slide-3.jpg">
				<img class="animated slideInUp" src="<?php //echo THEME_IMG_PATH; ?>/vert-slide-3.jpg">
			</div>
			<div id="slide-4" class=" animated" data-img-src="wp-content/themes/backshield/images/vert-slide-4.jpg">
				<img class="animated slideInUp"  src="<?php //echo THEME_IMG_PATH; ?>/vert-slide-4.jpg">
			</div>-->

		<!--</div>/slide-wrap-->
	
		
		</section>
		<div id="filler">FILLER</div>
		
		<?php endwhile; endif; ?>


</section>
<?php get_footer(); ?>