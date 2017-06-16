<?php
/*
Template Name: fw
*/
?>

<?php get_header(); ?>
<div id="root">
			<div id="content" >
			
				<div id="inner-content">
			
				    <div id="main" class="" role="main">
					
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>			    
			    <?php endwhile; endif; ?>
					    					
    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->
			</div> <!-- end #root -->

<?php get_footer(); ?>
