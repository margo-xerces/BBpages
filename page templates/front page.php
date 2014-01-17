<?php
/*
Template Name: Page - BB_Project BB
*/
?>

<?php include (TEMPLATEPATH . "/bumblebee_header_page.php"); ?>

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
<h2>Project Bumble Bee</h2>
	<div class="sub-dvdr"></div>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla rutrum lorem ante, sed ullamcorper nisi tempor mollis. Curabitur dui nisi, dignissim eu sagittis quis, cursus vitae turpis. Pellentesque condimentum enim nulla, ut volutpat erat pulvinar ut. Aenean vestibulum metus volutpat elit consequat blandit. Praesent tincidunt, nulla id dapibus euismod, libero turpis porta urna, a ullamcorper odio quam eu felis. Vivamus at volutpat tellus. Nam placerat orci in dolor elementum, non ultricies nunc tempus.</p>
<div class="sub=dvdr"></div>
<h2>Take Action</h2>
	<div class="grid_2" id="citsci" style="margin-left:0px;">
		<div class="contain">Join Bumble Bee Watch</div>
	<div class="grid_2" id="habitat" style="margin-left:0px;">
		<div class="contain">Create Habitat!</div>
<div class="sub-dvdr"></div>
<h2>Our Work</h2>
<p></p>
	<div class="thirds">
		<a href="?page_id"><h5>Protecting Bumble Bees</h5></a>
		<p>Put some text about protecting bumble bees here, preferably no more than 30 words or so.<a href="?page_id=12681">Learn more.</a></p>
	</div>
	<div class="thirds">
		<a href="?page_id"><h5>Evaluating Conservation Status</h5></a>
		<p>Put some text about evaluating conservation status here, preferably no more than 30 words or so.<a href="?page_id=8800">Learn more.</a></p>
	</div>
	<div class="thirds" style="border:none;">
		<a href="?page_id"><h5>Land Management</h5></a>
		<p>Put some text about land management here, preferably no more than 30 words or so<a href="?page_id=9883">Learn more.</a></p>
	</div>

	<div class="clear"></div>

	<p>Take a look at some of the work that we do!</p>

	<!-- INSERT SLIDE DECK HERE-->

</div>
<div class="clear"></div>

<?php include (TEMPLATEPATH . "/sidebar_bumblebee.php"); ?>
<?php get_footer(); ?>

