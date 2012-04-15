<?php head(); ?>
<div class="container">
<div id="primary"  class="content">
    <?php if ($homepageText = get_theme_option('Homepage Text')): ?>
    <p><?php echo $homepageText; ?></p>
    <?php endif; ?>

<?php if (get_theme_option('Display Featured Item') == 1): ?>

<!-- Featured Item -->

<div class="row">
  <div id="featured-items" class="six columns">

	<?php echo display_random_featured_item(); ?>
</div>


<?php endif; ?>
<!--end featured-item-->

<!-- Recent Items -->
<div id="recent-items" class="six columns">
	<h2>Recently Added Items</h2>

	<?php
$homepageRecentItems = (int)get_theme_option('Homepage Recent Items') ? get_theme_option('Homepage Recent Items') : '3';
set_items_for_loop(recent_items($homepageRecentItems));
if (has_items_for_loop()):
?>
	<ul class="items-list">
	<?php while (loop_items()): ?>
	<li class="item">
		<h3><?php echo link_to_item(); ?></h3>
		<?php if($itemDescription = item('Dublin Core', 'Description', array('snippet'=>150))): ?>
			<p class="item-description"><?php echo $itemDescription; ?></p>
		<?php endif; ?>
	</li>
	<?php endwhile; ?>
	</ul>
	<?php else: ?>
	<p>No recent items available.</p>
	<?php endif; ?>
	<p class="view-items-link"><?php echo link_to_browse_items('View All Items'); ?></p>


</div>
</div>
<!-- end recent-items -->

	<!-- Featured Collection -->
<div class="row">
<div class="twelve columns">

			<div class="panel">
	<?php if (get_theme_option('Display Featured Collection')): ?>

	<div id="featured-collection">
	<?php echo display_random_featured_collection(); ?>
	</div>
	

	</div>

<?php endif; ?>
	<!-- end featured collection -->
	
	
	<!-- Featured Exhibit -->
	
	<div class="row">


<?php if ((get_theme_option('Display Featured Exhibit')) && function_exists('exhibit_builder_display_random_featured_exhibit')): ?>
</div>


<?php echo exhibit_builder_display_random_featured_exhibit(); ?>
<?php endif; ?>
</div>
	<!-- End featured Exhibit -->

</div>
<footer>
<?php foot(); ?></footer>