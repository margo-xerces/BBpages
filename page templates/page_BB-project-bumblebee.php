<?php
/*
Template Name: Page - BB_Project BB
*/
?>

<?php include (TEMPLATEPATH . "/header_page.php"); ?>

<?php include (TEMPLATEPATH . "/navigation.php"); ?>

<div id="maincolumn">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="entry">
                <h2><?php the_title(); ?></h2>
   		<?php the_content(); ?>
	</div>
		<?php endwhile; endif; ?>

</div> <!-- END MAINCOLUMN --> 

<?php include (TEMPLATEPATH . "/sidebar_bumblebees.php"); ?>
<?php get_footer(); ?>