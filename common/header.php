<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo get_html_lang(); ?>">
<head>
<title><?php echo settings('site_title'); echo isset($title) ? ' | ' . $title : ''; ?></title>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo settings('description'); ?>" />

<?php echo auto_discovery_link_tag(); ?>

<!-- Plugin Stuff -->
<?php plugin_header(); ?>

<!-- Stylesheets -->
<?php
queue_css(array('app', 'foundation'));
display_css();
?>

<!-- JavaScripts -->
<?php
queue_js(array('app', 'foundation','modernizr.foundation', 'jquery.foundation.orbit'));
display_js();
?>
<script type="text/javascript">
   $(window).load(function() {
       $('#featured-collection').orbit();
   });
</script>

</head>

<body<?php echo isset($bodyid) ? ' id="'.$bodyid.'"' : ''; ?><?php echo isset($bodyclass) ? ' class="'.$bodyclass.'"' : ''; ?>>
<?php plugin_body(); ?>

	<?php plugin_page_header(); ?>
	<div class="row">
		<div class="twelve columns">
			<h1 id="site-title">
				<?php echo link_to_home_page(custom_display_logo()); ?>
			</h1>

        <div id="primary-nav">
            <ul class="nav-bar">
            <?php echo custom_public_nav_header(); ?>
                           <?php plugin_page_header(); ?>
                           <li>                <?php echo link_to_advanced_search(); ?>
</li>
            <span id="search-container">
                <?php echo simple_search(); ?>
            </span><!-- end search -->
            </ul>
      
        </div><!-- end primary-nav -->




