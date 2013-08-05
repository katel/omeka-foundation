<!DOCTYPE html>
<html lang="<?php
echo get_html_lang();
?>">
<head>
	<meta charset="utf-8">
  <?php
if ($description = option('description')):
?>
  <meta name="description" content="<?php
    echo $description;
?>" />
  <?php
endif;
?>
  
  <title><?php
echo option('site_title');
echo isset($title) ? ' | ' . strip_formatting($title) : '';
?></title>

  <?php
echo auto_discovery_link_tags();
?>
  

  <!-- Plugin Stuff -->

  <?php
fire_plugin_hook('public_head', array(
    'view' => $this
));
?>

  <!-- Stylesheets -->

  <?php
queue_css_url('http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic');
queue_css_file('foundation');
queue_css_file('app');
echo head_css();
?>

  <!-- JavaScripts -->
  <?php
queue_js_file('app');
?>
  <?php
queue_js_file('foundation/foundation');
?>
  <?php
queue_js_file('foundation/foundation.orbit');
?>
  <?php
queue_js_file('vendor/jquery');
?>
  <?php
queue_js_file('vendor/custom.modernizr');
?>

  <?php
queue_js_file('foundation/foundation.forms');
?>




  <?php
echo head_js();
?>




</head>

<?php
echo body_tag(array(
    'id' => @$bodyid,
    'class' => @$bodyclass
));
?>
    <?php
fire_plugin_hook('public_body', array(
    'view' => $this
));
?>

<header>
		  <?php
fire_plugin_hook('public_header');
?>
		</header>
		
		        <div id="primary-nav" class="contain-to-grid sticky">
		<nav class="top-bar">
		 <ul class="title-area">
		    <!-- Title Area -->
		    <li class="name">
		       <h1 id="site-title"><a href="#"><?php
echo link_to_home_page(theme_logo());
?></a></h1>
		    </li>
		    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
		    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		  </ul>
	
				<section class="top-bar-section">
								        <!-- Left Nav Section -->
									<ul class="left">
					      
				        <?php
echo public_nav_main();
?>
		

						
										</ul>
				     

			<ul class="right">
				<li class="divider hide-for-small"></li>
				<li><?php
echo link_to_item_search('More Search Options');
?></li>
				
		  <li><?php
echo search_form(array(
    'show_advanced' => false
));
?></li>
		
</ul>
 </section>
		    </nav>



		  </div>

	<div class="row">
		
		<div class="large-12 columns">
	
	      <h1 id="site-title"><?php
echo link_to_home_page(theme_logo());
?></h1>




      


