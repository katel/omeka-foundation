<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
	<meta charset="utf-8">
  <?php if ( $description = option('description')): ?>
  <meta name="description" content="<?php echo $description; ?>" />
  <?php endif; ?>
  
  <title><?php echo option('site_title'); echo isset($title) ? ' | ' . strip_formatting($title) : ''; ?></title>

  <?php echo auto_discovery_link_tags(); ?>
  

  <!-- Plugin Stuff -->

  <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>

  <!-- Stylesheets -->

  <?php
  queue_css_url('http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic');
  queue_css_file('foundation');
 queue_css_file('app');
  echo head_css();
  ?>

  <!-- JavaScripts -->
  <?php queue_js_file('app'); ?>
  <?php queue_js_file('foundation'); ?>
  <?php queue_js_file('jquery.foundation.orbit'); ?>
  <?php queue_js_file('jquery.min'); ?>
  <?php echo head_js(); ?>




</head>

<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
<header>
		  <?php fire_plugin_hook('public_header'); ?>
		</header>
	<div class="row">
		<div class="twelve columns">
	
	      <h1 id="site-title"><?php echo link_to_home_page(theme_logo()); ?></h1>


        <div id="primary-nav">
         	<ul class="nav-bar">
<li>
	<?php 
$navArray = array();
$navArray[] = array('label'=>'Browse Items', 'uri'=>url('items'));
$navArray[] = array('label'=>'Browse Collections', 'uri'=>url('collections'));

echo nav($navArray);
	?>
	
	

</li>
<li>
<?php echo 	link_to_item_search('More Search Options'); ?>
</li>
          <span id="search-container">
            <?php echo search_form(array('show_advanced' => false)); ?>
           
            </span><!-- end search -->
            </ul>
      
        </div><!-- end primary-nav -->




