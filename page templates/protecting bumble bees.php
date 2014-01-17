<?php
/*
Template Name: Page - BB_Protecting Bumble Bees
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

<h2>Protecting Bumble Bees</h2>
<div class="sub-dvdr"></div>
	<div class="grid_2">
		<!-- Insert all of your text here until you find an appropriate break in the text to make it wrap-->
	</div>
	<div class="grid_2">
		<!-- Insert your image here-->
	</div>
	<div class="clear"></div>
	<div class="grid_4">
		<!-- Continue to insert text here-->
		<p>
			<h4>Endangered Species Act Protection</h4>
			<p></p>
			<div class="clear"></div>
			<br/>
			<h4>Seeking Regulation of Commercial Bumble Bees</h4>
			<p></p>
			<div class="clear"></div>
			<br/>
			<h4>State and Regional Advising</h4>
			<p></p>
			<br/>
			<p><strong>If you are a heritage or State Department of Fish and Wildlife biologist and want information about bumble bees, please contact us at <a href="mailto:bumblebees@xerces.org">bumblebees@xerces.org</a></strong></p>
		</p>
	<div class="clear"></div>
	<div class="sub-dvdr">
	<h4>Issues</h4>
		<!-- Issues go here! Either generated in PHP or just hand-coded - ask Sarina and Rich what they prefer-->
</div>
<div class="clear"></div>

<?php include (TEMPLATEPATH . "/sidebar_bumblebee.php"); ?>
<?php get_footer(); ?>