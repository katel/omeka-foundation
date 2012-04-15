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
queue_js(array('app', 'foundation'));
display_js();
?>

</head>

<body<?php echo isset($bodyid) ? ' id="'.$bodyid.'"' : ''; ?><?php echo isset($bodyclass) ? ' class="'.$bodyclass.'"' : ''; ?>>
<?php plugin_body(); ?>
<div class="container">
	<?php plugin_page_header(); ?>
	<div class="row">
		<div class="twelve columns">
			<h1 id="site-title">
				<?php echo link_to_home_page(custom_display_logo()); ?>
			</h1>
			<div id="primary-nav">
				<ul class="nav-bar">
					<li>
						<?php echo nav (
									array(
									'Browse Items' => uri('items'),
									'Browse Collections' => uri('collections')
								)
							);
						?>
					</li>
					<li>
						<?php echo link_to_advanced_search('More Search Options'); ?>
					</li>
					<li id="search-container">
						<?php echo simple_search(); ?>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>



