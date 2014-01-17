<?php
/*
Template Name: Page - BB_Evaluating Conservation Status
*/
?>

<?php include (TEMPLATEPATH . "/header_page.php"); ?>

<?php include (TEMPLATEPATH . "/navigation.php"); ?>

<!-- Put this here if making a page template:

	<div id="maincolumn">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="entry">
                <h2><?php the_title(); ?></h2>
   		<?php the_content(); ?>
	</div>
		<?php endwhile; endif; ?>

</div> <!-- END MAINCOLUMN --> 

-->



<body>
	<h4>Evaluating Conservation Status</h4>
	<div class="sub-dvdr"></div>
	<div class="grid_2">
		<!--Put all of your text here-->
	</div>
	<div class="grid_2">
		<!--Put your image here-->
	</div>
	<div class="grid_4">
		<!-- Do you have extra text that wraps? Then put it here-->
		<p></p>
		<p>
			<strong>For more information about endangered species, contact <a href="mailto:rich@xerces.org">rich@xerces.org</a></strong>
		</p>
	</div>
	<div class="clear"></div>
	<div class="sub-dvdr"></div>
		<div class="grid-4">
			<!--Resources go here, determine whether they are auto generated or hand-coded on the page (or in the template)-->
		</div>
	</div>
	<div class="clear"></div>
</body>

<?php include (TEMPLATEPATH . "/sidebar_bumblebee.php"); ?>
<?php get_footer(); ?>
