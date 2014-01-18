<div id="sidecolumn">
  <div class="main-dvdr"></div>
  <!-- DONATE Button w. Bootstrap -->
  <a class="btn btn-primary btn-large" href="<?php echo get_option('home'); ?>/?page_id=14057/" style="width: 160px; height: 50px; text-decoration: none; margin: 0px 10%;">
    <h4 class="btnlabel">Donate</h4> <h1 class="btnlabel">to protect invertebrates!</h1>
  </a>
  
  <div class="sub-dvdr"></div>
    <h4 class="orng" style="font-weight:400;">Newsletter</h4> 
    <p>Sign up for our newsletter to recieve up to date information about our programs and events.</p>             
  <!-- BEGIN: Constant Contact Stylish Email Newsletter Form 
  <div align="left">
    <div style="width:160px; background-color: #ffffff;"> -->
      <form name="ccoptin" action="http://visitor.constantcontact.com/d.jsp" target="_blank" method="post" style="margin-bottom:3;">
        <input type="text" class="input-large" placeholder="Email">
        <button type="submit" name="go" value="go" class="btn">Submit</button>
        <input type="hidden" name="m" value="1102968923571">
       <input type="hidden" name="p" value="oi">
      </form>
  <!-- END: Constant Contact Stylish Email Newsletter Form -->

  <!-- Search field -->
  <div class="sub-dvdr"></div>
    <h5>Search this Site</h5>
    <?php include (TEMPLATEPATH . '/searchform.php'); ?>

  <!-- Program Contact INFO -->
  <div class="sub-dvdr"></div>
  <h5>Contact Us</h5>
  <p><a class="standout" href="mailto:bumblebees@xerces.org">Email us</a> with your questions and comments about bumble bees.</p>

  <div class="main-dvdr"></div>

  <!-- Navigation -->
    <h4><a href="?page_id=12" style="color:#E67803">Project Bumble Bee</a></h4>  
    <h5>Take Action!</h5>
    <ul>
      <li class="minusbottom"><h6><a class="annoying" href="http://www.bumblebeewatch.org">Be a Citizen Scientist</a></h6></li>
      <li class="minusbottom"><h6><a class="annoying" href="?page_id=18630">Create Habitat</a></h6></li>
    </ul>
    <h5>Our Work</h5>
    <ul>
      <li class="minusbottom"><h6><a class="annoying" href="?page_id=18626">Protecting Bumble Bees</a></h6></li>
      <li class="minusbottom"><h6><a class="annoying" href="?page_id=18624">Evaluating Conservation Status</a></h6></li>
    </ul>
    <h5>Learn About Bumble Bees</h5>
    <ul>
      <li class="minusbottom"><h6><a class="annoying" href="?page_id=18620">Species of Highest Conservation Concern</a></h6></li>
      <li class="minusbottom"><h6><a class="annoying" href="?page_id=18628">Identification Guides</a></h6></li>
    </ul>
    <h5><a href="?page_id=18632" style="color:#E67803">Contributors</a></h5>

  <div class="sub-dvdr"></div>
 <!-- Button/badge for Bumble Bee Watch -->
   <!-- BBW Button w. Bootstrap -->
  <a class="btn btn-primary btn-large" href="http://www.bumblebeewatch.org" style="width: 160px; height: 50px; text-decoration: none; margin: 0px 10%;">
    <h4 class="btnlabel">Join Bumble Bee Watch</h4>
  </a>

  <?php the_meta (); ?>
</div><div class="clear"></div> <!-- END SIDECOLUMN -->