<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<!-- Bootstrap -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" rel="stylesheet" />
<!-- My CSS modification -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.mods.css" rel="stylesheet" />
<!-- Google Fonts API/ OpenSans -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,700' rel='stylesheet' type='text/css'>
<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/SpryMenuBar.js" type="text/javascript"></script>
<link href="<?php bloginfo('stylesheet_directory'); ?>/scripts/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/SpryCollapsiblePanel.js" type="text/javascript"></script>
<link href="<?php bloginfo('stylesheet_directory'); ?>/scripts/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('stylesheet_directory'); ?>/scripts/mainpanel.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('stylesheet_directory'); ?>/print.css" rel="stylesheet" type="text/css" media="print" />

<!-- Interactive Map JavaScript -->
<script type="text/javascript" src="http://www.xerces.org/wp-includes/js/mapper/mapper.js"></script>
<script type="text/javascript" src="http://www.xerces.org/wp-includes/js/mapper/wz_jsgraphics.js"></script>
<script type="text/javascript" src="http://www.xerces.org/wp-includes/js/mapper/cvi_tip_lib.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="prj.css">

	<link rel="stylesheet" type="text/css" href="http://www.xerces.org/wp-content/themes/xerces/overlay.css" />
	<link rel="stylesheet" type="text/css" href="http://www.xerces.org/wp-content/themes/xerces/accordion.css">
	<link rel="stylesheet" type="text/css" href="http://www.xerces.org/wp-content/themes/xerces/tooltip.css" />
	<link rel="stylesheet" type="text/css" media="print" href="prt.css">
<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" media="all" href="prj_ie.css">
<![endif]-->
<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="http://www.xerces.org/wp-content/themes/xerces/overlay_ie.css" />
	<link rel="stylesheet" type="text/css" href="http://www.xerces.org/wp-content/themes/xerces/accordion_ie.css">
	<link rel="stylesheet" type="text/css" media="print" href="http://www.xerces.org/wp-content/themes/xerces/prt_ie.css">
<![endif]-->
<!--[if lt IE 7]>
	<script type="text/javascript" src="fixed.js"></script>
	<style type="text/css">
		.png { visibility: hidden; behavior: url(../cvi/scripts/iepngfix2.htc); }
		#cvi_tooltip {
			width:expression(this.offsetWidth>240?'240px':'auto');
		}
	</style>
<![endif]-->
<!-- END Interactive Map JavaScript -->

<!-- jQuery -->
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
<!-- Bootstrap Script -->
<script src="<?php bloginfo ('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>
<!-- END Bootstrap Script -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22487210-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>

<div id="container">

	<div id="top"><!-- top of page --></div>
    
    	<div id="content">
        
        	<?php 
       		global $wp_query;
			$cached_page_id = $wp_query->get_queried_object_id(); 
			?>
        
        
        
       	  	<div id="banner">
            
            	<a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/headers/<?php echo "$cached_page_id" ?>.jpg" width="940" height="240" border="0" /></a>
                
            </div>
            
            <div id="page">
