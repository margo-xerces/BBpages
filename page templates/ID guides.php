<?php
/*
Template Name: Page - BB_ID Guides
*/
?>

<?php include (TEMPLATEPATH . "/header_page.php"); ?>

<?php include (TEMPLATEPATH . "/navigation.php"); ?>

<div id="maincolumn">
	<div class="entry">
		<!-- LOOP 1: for page HTML content -->
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
   		<?php the_content(); ?>
		<?php endwhile; endif; ?>

	    	<!-- LOOP 2: for dynamic "Resources" list -->
  	        <?php query_posts(array('showposts' => '20', 'post_type' => 'page', 'orderby' => 'post__in', 'post__in'=>array(numbers,numbers,numbers))); ?>
                <?php if (have_posts()) : ?>
	  		<?php while (have_posts()) : the_post(); ?>
	    	<div class="grid_1" style="margin-left:0px;">
	    		<a href='<?php the_permalink() ?>'rel='bookmark' title='<?php echo get_the_title($ID); ?>'><?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('thumbnail');
				} ?></a>
			</div>
			<div class="grid_3">
				<a href='<?php the_permalink() ?>'rel='bookmark' title='<?php echo get_the_title($ID); ?>' target="blank_"><h4 style="margin-top:0px;"><?php echo get_the_title($ID); ?></h4></a>
				<?php the_excerpt('excerpt_more', 'new_excerpt_more'); ?>
			</div>
			<div class="clear"></div>
			<br><br>
	    	<?php endwhile; ?>
	    	<?php endif; ?>
	    	<?php wp_reset_query(); ?> <!-- Restores global post data -->

	</div> <!-- END ENTRY -->
</div> <!-- END MAINCOLUMN -->

<?php include (TEMPLATEPATH . "/sidebar_bumblebees.php"); ?>
<?php get_footer(); ?>